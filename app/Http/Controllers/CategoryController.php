<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Services\CategoryService;

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
     * @param CategoryRequest $request
     * @return mixed
     */
    public function create(CategoryRequest $request)
    {
        $user = auth('api')->user();
        return $this->categoryService->processCategory($request, $user);
    }
}
