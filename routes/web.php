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

Route::get('/' , [ControlEvent::class , 'homePage'])->name('home');

Route::post('/' , [ControlEvent::class , 'addProduit'])->name('route-add-home');

Route::get('allproduit' , [ControlEvent::class , 'allProduit'])->name('route-all-liste');

Route::get('editproduit/{id}' , [ControlEvent::class , 'editProduit'])->name('route-edit-liste');



Route::put('updateproduit/{id}' , [ControlEvent::class , 'updateProduit'])->name('route-update-liste');

Route::delete('deleteproduit{id}' , [ControlEvent::class , 'deleteProduit'])->name('route-delete-produit');
