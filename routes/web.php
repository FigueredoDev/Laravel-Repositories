<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::post('produtos/{id}', [ProductController::class, 'create'])-> name('product.create');

Route::get('produtos/{id}', [ProductController::class, 'read'])-> name('product.read');

Route::put('produtos/{id}', [ProductController::class, 'update'])-> name('product.update');

Route::delete('produtos/{id}', [ProductController::class, 'delete'])-> name('product.delete');

Route::get('produtos', [ProductController::class, 'index'])-> name('product.index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contatos', function () {
    return view('contact');
});

Route::get('/categorias/{flag}', function ($flag){
    return "Produtos da categoria: {$flag}";
});

Route::get('/produtos/{id_produto?}', function ($id_produto = ""){
    return "Produto(s) {$id_produto}";
});

Route::redirect('/redirect1', '/redirect2');

Route::get('/redirect2', function (){
    return "Pagina redirecionada";
});

Route::get('/carrinho', function (){
    return "Produtos do Carrinho";
})-> name('url.carrinho');

Route::get('redirect3', function (){
    return redirect()-> route('url.carrinho');
});


Route::group([
    'middleware' => ['auth'],
    'prefix' => 'admin',
    'name' => 'admin.',
], function (){
    Route::get('/dashboard', function (){
        return "Hello Admin";
    })-> name('dashboard');
    
    Route::get('/', function (){
        return redirect()-> route('dashboard');
    });

    Route::get('/financeiro', function (){
        return "Financeiro Admin";
    })-> name('financeiro');
    
    Route::get('/cadastros', function (){
        return "Cadastros Admin";
})-> name('cadastros');
});
