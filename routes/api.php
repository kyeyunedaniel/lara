<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//get all trainings
Route::get('getTrainingsByUserId/{id}',[BlogController::class,'getTrainings']);

//get all users
Route::get('getAllUsers',[BlogController::class,'getUsers']);


//get all Trainings
Route::get('getAllTraining',[BlogController::class,'getAllTrainnees']);

//get all Users by Id 
Route::get('getUserById/{id}',[BlogController::class,'getUsersid']);

//INTRODUCING CACHING...

// getAllUsersLaravelCache (no args)
Route::get('getAllUsersLaravelCache',[BlogController::class,'getAllUsersLaravelCache']);

// getUserbyIdLaravelCache (takes an ID)
Route::get('getUserbyIdLaravelCache/{id}',[BlogController::class,'getUserbyIdLaravelCache']);

// getAllTrainingsLaravelCache  (no args)
Route::get('getAllTrainingsLaravelCache',[BlogController::class,'getAllTrainingsLaravelCache']);

// getTrainingsByUserIdLaravelCache (takes an ID)
Route::get('getTrainingsByUserIdLaravelCache/{id}',[BlogController::class,'getTrainingsByUserIdLaravelCache']);


///checking if the all user cache has been stored 
Route::get('cachecheck',[BlogController::class,'cachecheck']);


Route::get('UserClearcache',[BlogController::class,'UserClearcache']);

Route::get('TrainingClearcache',[BlogController::class,'TrainingClearcache']);


// 1)checking speeds with memcached. 
Route::get('getAllUsersMemCached',[BlogController::class,'getAllUsersMemCached']);

Route::get('getAllTrainingsMemCached',[BlogController::class,'getAllTrainingsMemCached']);
