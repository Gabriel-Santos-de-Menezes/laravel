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

//Rota com parâmetros opcionais
Route::get('/produtos/{idProduct?}', function ($idProduct = ''){
    return "Produto(s) {$idProduct}";
});

//Rota com parâmetros
Route::get('/categoria/{cat}/posts', function ($cat){
    return "Posts da categoria: {$cat}";
});

//Tem que especificar os tipos de verbos HTTP 
//que a rota vai aceitar
Route::match(['get', 'post'], '/match', function (){
    return 'Any'; 
});

//Permite todo tipo d verbo HTTP
Route::any('/any', function (){
    return 'Any'; 
});

Route::post('/register', function (){
    return ''; 
});

Route::get('/contato', function (){
    return view('site.contact'); 
});

Route::get('/', function () {
    return view('welcome');
});
