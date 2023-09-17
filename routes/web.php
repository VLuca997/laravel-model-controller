<?php

use Illuminate\Support\Facades\Route;

//controller
use App\Http\Controllers\Guest\MainController;
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

Route::get('/contact', function(){
    return view('contact');

})->name('contact');



//rotta home
Route::get('/', [MainController::class, 'index'])->name('home');
//rotta parametrica
Route::get('/movies/{id}', [MainController::class, 'singleMovie'])->name('movies.singleMovie');//avremo una rotta per ogni film selezionato