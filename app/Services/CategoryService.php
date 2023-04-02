<?php
namespace App\Services;

use App\Http\Controllers\AppBaseController;
use App\Repositories\CategoryRepository;
use App\Utilities\GeneralConstants;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryService extends AppBaseController
{
    /**
     * @var CategoryRepository
     */
    public $categoryRepository;

    /**
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @param Request $request
     * @param $user
     * @return mixed
     * @throws Exception
     */
    public function processCategory(Request $request, $user)
    {
        return $this->categoryRepository->createCategory($request, $user);
    }

    /**
     * @return mixed
     */
    public function getAllCategory($user)
    {
        return $this->categoryRepository->allCategory($user);
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function updateCategory(Request $request, $id)
    {
        return $this->categoryRepository->updateCategory($request, $id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteCategory($id)
    {
        return $this->categoryRepository->deleteCategory($id);
    }
}
