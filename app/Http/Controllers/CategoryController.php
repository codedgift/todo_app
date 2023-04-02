<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends AppBaseController
{
    /**
     * @var CategoryService
     */
    public $categoryService;

    /**
     * @param CategoryService $categoryService
     */
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        $user = auth('api')->user();

        return $this->categoryService->getAllCategory($user);
    }

    /**
     * @param CategoryRequest $request
     * @return mixed
     */
    public function create(CategoryRequest $request)
    {
        $user = auth('api')->user();

        return $this->categoryService->processCategory($request, $user);
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function update(Request $request, $id)
    {
        auth('api')->user();

        return $this->categoryService->updateCategory($request, $id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        auth('api')->user();

        return $this->categoryService->deleteCategory($id);
    }
}
