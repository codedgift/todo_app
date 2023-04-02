<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangeTaskPriorityRequest;
use App\Http\Requests\TaskRequest;
use App\Services\TaskService;
use Illuminate\Http\Request;

class TaskController extends AppBaseController
{
    /**
     * @var TaskService
     */
    public $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        $user = auth('api')->user();

        return $this->taskService->allTasks($user);
    }

    /**
     * @param TaskRequest $request
     * @return mixed
     */
    public function create(TaskRequest $request)
    {
        $user = auth('api')->user();

        return $this->taskService->createTask($request, $user);
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function update(Request $request, $id)
    {
        $user = auth('api')->user();

        return $this->taskService->updateTask($request, $id, $user);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        auth('api')->user();

        return $this->taskService->deleteTask($id);
    }

    /**
     * @param ChangeTaskPriorityRequest $request
     * @param $id
     * @return mixed
     */
    public function changeTaskPriority(ChangeTaskPriorityRequest $request, $id)
    {
        $user = auth('api')->user();

        return $this->taskService->changeTaskPriority($request, $user, $id);
    }
}
