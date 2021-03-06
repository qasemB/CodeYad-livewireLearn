<?php

use App\Http\Livewire\Index;
use App\Http\Livewire\Posts;
use App\Http\Livewire\TasksComp;
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

Route::get('/', Index::class);
Route::get('/task/{userId}', TasksComp::class);
Route::get('/posts', Posts::class);
