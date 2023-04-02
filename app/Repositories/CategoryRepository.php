<?php
namespace App\Repositories;

use App\Http\Controllers\AppBaseController;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Utilities\GeneralConstants;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CategoryRepository extends AppBaseController
{

    /**
     * @param Request $request
     * @param $user
     * @return mixed
     * @throws \Exception
     */
    public function createCategory(Request $request, $user)
    {
        try {
            $data = [
                'user_id' => $user->id,
                'name' => $request['name'],
                'description' => $request['description']
            ];

            $category = Category::firstOrCreate(['user_id' => $user->id, 'name' => $request['name']], $data);

            if ($category->wasRecentlyCreated) {

                Log::info('New Category Created for '. $user->email);
                $message = "New Category Created Successful";

                return $this->successResponse($category, GeneralConstants::SUCCESS_TEXT, $message, $message);

            } else {
                $message = "You have already created a category with this name: {$request['name']}";
                return $this->errorResponse('Category Already Exists!', GeneralConstants::ERROR_TEXT, $message);
            }

        } catch (QueryException $e) {
            $message = "Creating Category Insertion Error";

            if ($e->errorInfo[1] == 1062) { // Duplicate key error
                throw new \Exception('A category with this name and user_id already exists.');
            } else {
                throw new \Exception('Unable to create category.');
            }
        }
    }


}
