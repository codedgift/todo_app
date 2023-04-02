<?php
namespace App\Repositories;

use App\Http\Controllers\AppBaseController;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Utilities\GeneralConstants;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Cache;
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

    /**
     * @return mixed
     */
    public function allCategory($user)
    {
        $categories = Cache::remember('categories_' . $user->id, 5, function () use ($user) {
            return Category::where('user_id', $user->id)->get();
        });

        $message = "All Categories";
        return $this->successResponse($categories, GeneralConstants::SUCCESS_TEXT, $message, $message);
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function updateCategory(Request $request, $id)
    {
        $updateData = ['name' => $request['name'], 'description' => $request['description']];

        Category::where('id', $id)->update($updateData);

        $message = "Category Data Updated Successfully";
        return $this->successResponse('Successfully Updated', GeneralConstants::SUCCESS_TEXT, $message, $message);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteCategory($id)
    {
        try {

            $category = Category::findOrFail($id);
            $category->delete();

            $message = "Category Data Deleted Successfully";

            return $this->successResponse('Successfully Deleted', GeneralConstants::SUCCESS_TEXT, $message, $message);

        } catch (ModelNotFoundException $e) {

            $message = "Error Deleting a record!";
            return $this->errorResponse($e->getMessage(), GeneralConstants::ERROR_TEXT, $message);

        }

    }

}
