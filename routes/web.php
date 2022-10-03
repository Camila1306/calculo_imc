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

/*Route::get('/', function () {
    return view('welcome');
});
*/

use App\Http\Controllers\IMCController;

Route::get('/', [IMCController::class, 'index']);

Route::get('/dadosimc', [IMCController::class, 'dadosimc']);
Route::get('/imc', [IMCController::class, 'imc']);
Route::get('/dadossono', [IMCController::class, 'dadossono']);
Route::get('/sono', [IMCController::class, 'sono']);