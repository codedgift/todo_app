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

    public $taskRepository;

    public function __construct(TaskRepository $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

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

    public function validateDateRange($start_date, $end_date)
    {
        $start_date = Carbon::parse($start_date);
        $end_date = Carbon::parse($end_date);
    
        if ($start_date->lt($end_date) || $start_date->eq($end_date)) {
            return true;
        } else {
            return false;
        }
    }

    public function validateCategoryIDBelongsToAUser($category_id, $user)
    {
        return Category::where('user_id', $user->id)
                            ->where('id', $category_id)
                            ->first();

    }

}