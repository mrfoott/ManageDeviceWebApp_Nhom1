<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/role', [\App\Http\Controllers\RolesController::class, 'index']);
Route::get('/role/{role_id}', [\App\Http\Controllers\RolesController::class, 'show']);
Route::get('/role/create/role', [\App\Http\Controllers\RolesController::class, 'create']);
Route::post('/role/create/role', [\App\Http\Controllers\RolesController::class, 'store']);
Route::get('/role/{role}/edit', [\App\Http\Controllers\RolesController::class, 'edit']);
Route::put('/role/{role}/edit', [\App\Http\Controllers\RolesController::class, 'update']);
Route::delete('/role/{role}', [\App\Http\Controllers\RolesController::class, 'destroy']);

Route::get('/department', [\App\Http\Controllers\DepartmentsController::class, 'index']);
Route::get('/department/{department_id}', [\App\Http\Controllers\DepartmentsController::class, 'show']);
Route::get('/department/create/department', [\App\Http\Controllers\DepartmentsController::class, 'create']);
Route::post('/department/create/department', [\App\Http\Controllers\DepartmentsController::class, 'store']);
Route::get('/department/{department}/edit', [\App\Http\Controllers\DepartmentsController::class, 'edit']);
Route::put('/department/{department}/edit', [\App\Http\Controllers\DepartmentsController::class, 'update']);
Route::delete('/department/{department}', [\App\Http\Controllers\DepartmentsController::class, 'destroy']);

Route::get('/cateinve', [\App\Http\Controllers\CategoryInventoriesController::class, 'index']);
Route::get('/cateinve/{cateinve_id}', [\App\Http\Controllers\CategoryInventoriesController::class, 'show']);
Route::get('/cateinve/create/cateinve', [\App\Http\Controllers\CategoryInventoriesController::class, 'create']);
Route::post('/cateinve/create/cateinve', [\App\Http\Controllers\CategoryInventoriesController::class, 'store']);
Route::get('/cateinve/{cateinve}/edit', [\App\Http\Controllers\CategoryInventoriesController::class, 'edit']);
Route::put('/cateinve/{cateinve}/edit', [\App\Http\Controllers\CategoryInventoriesController::class, 'update']);
Route::delete('/cateinve/{cateinve}', [\App\Http\Controllers\CategoryInventoriesController::class, 'destroy']);

Route::get('/user', [\App\Http\Controllers\UserController::class, 'index']);
Route::get('/user/{user_id}', [\App\Http\Controllers\UserController::class, 'show']);
Route::get('/user/create/user', [\App\Http\Controllers\UserController::class, 'create']);
Route::post('/user/create/user', [\App\Http\Controllers\UserController::class, 'store']);
Route::get('/user/{user}/edit', [\App\Http\Controllers\UserController::class, 'edit']);
Route::put('/user/{user}/edit', [\App\Http\Controllers\UserController::class, 'update']);
Route::delete('/user/{user}', [\App\Http\Controllers\UserController::class, 'destroy']);
