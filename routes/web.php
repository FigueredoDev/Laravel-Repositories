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

Route::get('/contatos', function () {
    return view('contact');
});

Route::any("/any", function () {
    return "Method Any";});

Route::match(["get", "post"],"/match", function () {
    return "Method Match";});

    Route::get('/categorias/{flag}', function ($flag){
    return "Produtos da categoria: {$flag}";
});

Route::get('/categorias/{flag}/posts', function ($post){
    return "Posts da categoria: {$post}";
});

Route::get('/produtos/{id_produto?}', function ($id_produto = ""){
    return "Produto(s) {$id_produto}";
});