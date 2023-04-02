<?php

namespace App\Services;

use App\Http\Controllers\AppBaseController;
use App\Models\Category;
use App\Models\Task;
use App\Repositories\TaskRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Utilities\GeneralConstants;

class TaskService extends AppBaseController
{

    /**
     * @var TaskRepository
     */
    public $taskRepository;

    /**
     * @param TaskRepository $taskRepository
     */
    public function __construct(TaskRepository $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    /**
     * @param $user
     * @return mixed
     */
    public function allTasks($user)
    {
        return $this->taskRepository->allTasks($user);
    }

    /**
     * @param Request $request
     * @param $user
     * @return mixed
     */
    public function createTask(Request $request, $user)
    {
        if (!$this->validateDateRange($request['start_date'], $request['end_date'])) {
            $error = "Invalid Date Range";
            $message = "Start Date must be greater than End Date";

            return $this->errorResponse($error, GeneralConstants::ERROR_TEXT, $message);
        }

        if ($this->validateCategoryIDBelongsToAUser($request['category_id'], $user) == NULL) {
            $error = "Invalid Category ID";
            $message = "Category ID does not belong to this user";

            return $this->errorResponse($error, GeneralConstants::ERROR_TEXT, $message);
        }

        return $this->taskRepository->createTask($request, $user);

    }

    /**
     * @param $start_date
     * @param $end_date
     * @return bool
     */
    public function validateDateRange($start_date, $end_date): bool
    {
        $start_date = Carbon::parse($start_date);
        $end_date = Carbon::parse($end_date);

        if ($start_date->lt($end_date) || $start_date->eq($end_date)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $category_id
     * @param $user
     * @return mixed
     */
    public function validateCategoryIDBelongsToAUser($category_id, $user)
    {
        return Category::where('user_id', $user->id)
                            ->where('id', $category_id)
                            ->first();

    }

    /**
     * @param Request $request
     * @param $id
     * @param $user
     * @return mixed
     */
    public function updateTask(Request $request, $id, $user)
    {
        if (!$this->validateDateRange($request['start_date'], $request['end_date'])) {
            $error = "Invalid Date Range";
            $message = "Start Date must be greater than End Date";

            return $this->errorResponse($error, GeneralConstants::ERROR_TEXT, $message);
        }

        if ($this->validateTaskID($id, $user) == NULL) {
            $error = "Invalid Task ID";
            $message = "Task ID does not belong to this user";

            return $this->errorResponse($error, GeneralConstants::ERROR_TEXT, $message);
        }

        if ($this->validateCategoryIDBelongsToAUser($request['category_id'], $user) == NULL) {
            $error = "Invalid Category ID";
            $message = "Category ID does not belong to this user";

            return $this->errorResponse($error, GeneralConstants::ERROR_TEXT, $message);
        }

        return $this->taskRepository->updateTask($request, $id);
    }

    /**
     * @param $id
     * @param $user
     * @return mixed
     */
    public function validateTaskID($id, $user)
    {
        return Task::where('user_id', $user->id)
                            ->where('id', $id)
                            ->first();

    }

}
