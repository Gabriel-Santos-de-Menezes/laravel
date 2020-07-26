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

//atalho para rotas de crud
//Route::resource('products', 'ProductController')->middleware('auth');
Route::resource('products', 'ProductController');

/* //para deletar um registro deve-se utilizar o delete
Route::delete('/products/{id}', 'ProductController@destroy')->name('products.destroy');
//para editar um registro deve-se utilizar put
Route::put('/products/{id}', 'ProductController@update')->name('products.update');
Route::get('/products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::get('/products/create', 'ProductController@create')->name('products.create');
Route::get('/products/{id?}', 'ProductController@show')->name('products.show');
Route::get('/products', 'ProductController@index')->name('products.index');
//Quando for registrar um novo cadastro deve-se usar o post
Route::post('/products', 'ProductController@store')->name('products.store'); */


Route::get('/login', function(){
    return 'Login';
});

//Grupos de Rotas
Route::get('/admin/dashboard', function(){
    return 'Home admin';
})->middleware('auth');

Route::middleware(['auth'])->group(function(){

    Route::get('/admin/financeiro', function(){
        return 'Financeiro admin';
    });
    
    Route::get('/admin/produtos', function(){
        return 'Produtos admin';
    });
});


//Rotas nomeadas
Route::get('/redirect3', function (){
    return redirect()->route('url.name');
});

Route::get('/nome-url', function (){
    return 'Hey hey';
})->name('url.name');

//Redirecionando rotas
Route::view('/view', 'welcome', ['id' => 'parametro']);
/* Route::get('/view', function(){
    return view('welcome');
}); */

Route::redirect('redirect1', 'redirect2');
/* Route::get('redirect1', function(){
    return redirect('/redirect2');
}); */

Route::get('redirect2', function(){
    return 'Redirect 02';
});

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
