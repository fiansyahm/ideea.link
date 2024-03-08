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
use App\Models\Page;
use App\Models\User;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SessionController;

Route::get('/wpadmin-login', [SessionController::class, 'index'])->name('login');
Route::post('/session/login', [SessionController::class, 'login']);
Route::get('/session/logout', [SessionController::class, 'logout']);
Route::get('/session/register', [SessionController::class, 'register']);
Route::post('/session/register', [SessionController::class, 'createUser']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/wpadmin', [AdminController::class, 'wpadmin']);
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard']);
});

