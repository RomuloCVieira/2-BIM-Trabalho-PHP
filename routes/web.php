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

Route::get('/pessoa','PessoaController@gerarPessoa');

Route::get('/cartao/visa', 'CardController@generateVisaCard');

Route::get('/cartao/diners', 'CardController@generateDinersCard');

Route::get('/cartao/master', 'CardController@generateMasterCard');

Route::get('/cartao/amex', 'CardController@generateAmexCard');