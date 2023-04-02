<?php
namespace App\Repositories;

use App\Http\Controllers\AppBaseController;
use App\Models\Task;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Utilities\GeneralConstants;

class TaskRepository extends AppBaseController
{

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
}