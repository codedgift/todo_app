<?php
namespace App\Repositories;

use App\Http\Controllers\AppBaseController;
use App\Models\Task;
use App\Models\Todo;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Utilities\GeneralConstants;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class TaskRepository extends AppBaseController
{

    /**
     * @param $user
     * @return mixed
     */
    public function allTasks($user)
    {

        $tasks = Cache::remember('tasks_' . $user->id, 5, function () use ($user) {
            return Task::with('todos')->where('user_id', $user->id)->get();
        });

        static::addObjectsToPayload($tasks);

        $message = "All Tasks";
        return $this->successResponse($tasks, GeneralConstants::SUCCESS_TEXT, $message, $message);
    }

    /**
     * @param $tasks
     * @return void
     */
    public static function addObjectsToPayload($tasks)
    {

        foreach ($tasks as $task) {

            $todoCompleted = self::countCompletedTodos($task->id);

            $task->todo_completed = !is_null($todoCompleted) ? [
                'status' => $todoCompleted
            ] : null;
        }
    }

    /**
     * @param $task_id
     * @return string
     */
    public static function countCompletedTodos($task_id): string
    {
        $totalTodos = Todo::where('task_id', $task_id)->count();
        $completedTodos = Todo::where('task_id', $task_id)->where('status', 1)->count();

        if ($completedTodos > 0) {
            return $completedTodos.'/'.$totalTodos.' completed';
        } else {
            return '0/'.$totalTodos.' completed';
        }
    }


    /**
     * @param Request $request
     * @param $user
     * @return mixed
     */
    public function createTask(Request $request, $user)
    {
        try {

            $taskData = [
                'user_id' => $user->id,
                'category_id' => $request['category_id'],
                'status' => $request['status'],
                'name' => $request['name'],
                'description' => $request['description'],
                'priority' => $request['priority'],
                'start_date' => $request['start_date'],
                'end_date' => $request['end_date']
            ];

            $task = Task::create($taskData);
            $message = "Task Created Successful";

            return $this->successResponse($task,GeneralConstants::SUCCESS_TEXT, $message, $message);

        } catch (Exception $e) {
            $message = "Task Data Insertion Error";
            Log::info($e->getMessage());
            return $this->errorResponse($e->getMessage(), GeneralConstants::ERROR_TEXT, $message);
        }
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function updateTask(Request $request, $id)
    {
        $taskData = [
            'category_id' => $request['category_id'],
            'status' => $request['status'],
            'name' => $request['name'],
            'description' => $request['description'],
            'priority' => $request['priority'],
            'start_date' => $request['start_date'],
            'end_date' => $request['end_date']
        ];

        Task::where('id', $id)->update($taskData);

        $message = "Task Data Updated Successfully";
        return $this->successResponse('Successfully Updated', GeneralConstants::SUCCESS_TEXT, $message, $message);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteTask($id)
    {
        DB::beginTransaction();

        try {

            // Get the task and its associated todos
            $task = Task::with('todos')->findOrFail($id);

            // Delete the todos
            $task->todos()->delete();

            // Delete the task
            $task->delete();

            DB::commit();

            $message = "Task and associated todos have been deleted successfully";

            return $this->successResponse('Successfully Deleted', GeneralConstants::SUCCESS_TEXT, $message, $message);

        } catch (Exception $e) {

            DB::rollback();

            $message = "Failed to delete task and associated todos";
            return $this->errorResponse($e->getMessage(), GeneralConstants::ERROR_TEXT, $message);

        }
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function changeTaskPriority(Request $request, $id)
    {
        $task = Task::where('id', $id)->update(['priority' => $request['priority']]);

        $message = "Task Data Updated Successfully";
        return $this->successResponse('Successfully Updated!', GeneralConstants::SUCCESS_TEXT, $message, $message);
    }
}
