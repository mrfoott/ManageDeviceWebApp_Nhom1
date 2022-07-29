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

// Đăng ký thành viên
Route::get('register', 'Auth\RegisterController@getRegister');
Route::post('register', 'Auth\RegisterController@postRegister');

// Đăng nhập và xử lý đăng nhập
Route::get('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@getLogin']);
Route::post('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@postLogin']);

// Đăng xuất
Route::get('logout', [ 'as' => 'logout', 'uses' => 'Auth\LogoutController@getLogout']);

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

Route::get('/inve', [\App\Http\Controllers\InventoriesController::class, 'index']);
Route::get('/inve/{inve_id}', [\App\Http\Controllers\InventoriesController::class, 'show']);
Route::get('/inve/create/inve', [\App\Http\Controllers\InventoriesController::class, 'create']);
Route::post('/inve/create/inve', [\App\Http\Controllers\InventoriesController::class, 'store']);
Route::get('/inve/{inve}/edit', [\App\Http\Controllers\InventoriesController::class, 'edit']);
Route::put('/inve/{inve}/edit', [\App\Http\Controllers\InventoriesController::class, 'update']);
Route::delete('/inve/{inve}', [\App\Http\Controllers\InventoriesController::class, 'destroy']);

Route::get('/ticket', [\App\Http\Controllers\TicketsController::class, 'index']);
Route::get('/ticket/{ticket_id}', [\App\Http\Controllers\TicketsController::class, 'show']);
Route::get('/ticket/create/ticket', [\App\Http\Controllers\TicketsController::class, 'create']);
Route::post('/ticket/create/ticket', [\App\Http\Controllers\TicketsController::class, 'store']);
Route::get('/ticket/{ticket}/edit', [\App\Http\Controllers\TicketsController::class, 'edit']);
Route::put('/ticket/{ticket}/edit', [\App\Http\Controllers\TicketsController::class, 'update']);
Route::delete('/ticket/{ticket}', [\App\Http\Controllers\TicketsController::class, 'destroy']);
