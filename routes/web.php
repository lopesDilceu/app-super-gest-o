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

/*
Route::get('/sobre-nos', function () {
    return 'Sobre-nós';
});*/

/*
Route::get('/contato', function () {
    return 'Contato';
});*/

Route::get('/', 'PrincipalController@principal')->name('homepage');

Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('sobrenos');

Route::get('/contato', 'ContatoController@contato')->name('contato');


Route::prefix('/app')->name('app.')->group(function(){
    Route::get('/login', function(){return 'Login'; })->name('login');
    Route::get('/clientes', function(){return 'Clientes'; })->name('clientes');
    Route::get('/fornecedores', function(){return 'Fornecedores'; })->name('fornecedores');
    Route::get('/produtos', function(){return 'produtos'; })->name('produtos');
});

Route::get('/rota1', function(){
    echo 'Rota 1';
})->name('rota1');

Route::get('/rota2', function(){
    //echo 'Rota 2';
    return redirect()->route('rota1');
})->name('rota2');

// Route::redirect('rota2', 'rota1');

Route::fallback(function(){
    echo 'Rota acessada não existe. Clique <a href="'.route('homepage').'">aqui</a> para acessar a homepage:';
});

Route::get('/contato/{nome}/{categoria_id}',
    function(
        string $nome,
        int $categoria_id = 1 //1 - 'Informação'
    ){
        echo 'Estamos aqui:'. $nome. ' - '.$categoria_id;
    }
)->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');

/* verbo http

get
post
put
patch
delete
options

*/