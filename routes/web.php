<?php
use App\Http\Controllers\ControlEvent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [ControlEvent::class, 'createTask'])->name('route-add-task');

Route::get('/', [ControlEvent::class, 'createTask'])->name('route-add-task');
Route::post('/', [ControlEvent::class, 'postcreateTask'])->name('postcreateTask');

