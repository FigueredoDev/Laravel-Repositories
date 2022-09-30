<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $produtos = ['Camisa', 'Short', 'Sapato'];
        
        return "Produtos disponivesis: {$produtos}";
    }

    public function create(){
        return "Cadastrando novos produtos";
    }

    public function read($id){
        return "Exibindo o produto de ID: {$id}";
    }

    public function update($id){
        return "Editar/Atualizar produto {$id}";
    }

    public function delete($id){
        return "Deletar produto {$id}";
    }
}
