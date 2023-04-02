<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Services\TaskService;
use Illuminate\Http\Request;

class TaskController extends AppBaseController
{
    //
    public $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    public function create(TaskRequest $request)
    {
        $user = auth('api')->user();

        return $this->taskService->createTask($request, $user);
    }
}
