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
/*
Route::get('/', function () {
    return 'Olá, seja bem vindo ao curso!';
});*/

Route::get('/', 'PrincipalController@principal');

/*
Route::get('/sobre-nos', function () {
    return 'Sobre-nós';
});*/

Route::get('/sobre-nos', 'SobreNosController@sobreNos');

/*
Route::get('/contato', function () {
    return 'Contato';
});*/

Route::get('/contato', 'ContatoController@contato');
Route::get('/contato',function(){
    echo 'Estamos aqui!';
});

/* verbo http

get
post
put
patch
delete
options

*/