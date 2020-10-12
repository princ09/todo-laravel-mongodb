<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

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

/*Route::get('about',function(){
    return view('about');
});*/

Route::get('/todos' , [TodosController::class , 'index'] );
Route::get('/todos/{todo}',  [TodosController::class , 'show'] );
Route::get('new-todos', [TodosController::class , 'create']);
Route::post('store-todos', [TodosController::class , 'store']);