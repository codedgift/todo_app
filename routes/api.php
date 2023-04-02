<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//---------------------------- Authentication Routes -------------------------------------//
Route::middleware('guest:api')->group(function () {
    //------------------------ Registration Route ----------------------------------------//
    Route::post('register', [RegisterController::class, 'register']);

    //----------------------- Verify Account Route ---------------------------------------//
    Route::post('verify/email', [VerificationController::class, 'verifyEmail']);

    //-------------------- Login Route --------------------------------------------------//
    Route::post('login', [LoginController::class, 'login']);
});

//----------------------- Categories Routes --------------------------------------------//
Route::middleware('jwt.auth')->prefix('auth')->group(function() {
    //---------------- Create Category Route -------------------------------------------//
    Route::post('create/category', [CategoryController::class, 'create']);

    //-------------- Get All Cateogries Route -----------------------------------------//
    Route::get('get/all/category', [CategoryController::class, 'index']);

    //-------------- Update Cateogry Route --------------------------------------------//
    Route::patch('category/{id}/update', [CategoryController::class, 'update']);
});
