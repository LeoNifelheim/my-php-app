<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HobbiesController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::get('/', [HomeController::class, 'home'])
  ->name('home.index');
Route::get('/hobbies', [HobbiesController::class, 'hobbies'])
  ->name('home.hobbies');
Route::get('/skills', [SkillsController::class, 'skills'])
  ->name('home.skills');
Route::prefix('/projects')->name('projects.')->group(function(){
    Route::get('/list', [ProjectsController::class, 'home'])
        ->name('index');
    Route::resource('/posts', PostsController::class)
        ->only(['index', 'show', 'create', 'store', 'edit', 'update', 'destroy']);
});

Auth::routes();

