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
}
