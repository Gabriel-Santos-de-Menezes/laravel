<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        $products = ['Notebook', 'Desktop', 'Gabinete'];
        return $products; //retornar um JSON quando return um array
    }

    //a rota passa parâmetro
    public function show($id = '')
    {
        return "id do produto:" . $id;
    }

    public function create()
    {
        return 'Exibe o form de cadastro de um novo produto';
    }

    //Exibe o form de edição de um  produto que foi recebido por parâmetro
    public function edit($id)
    {
        return 'Exibe o form de edição do produto' . $id;
    }

    //Método post para cadastrar
    public function store()
    {
        return 'Cadastrando um novo produto';
    }

    //Método para atualizar um registro
    public function update($id){
        return 'Editando produto' .  $id;
    }

    //Método para deletar um registro
    public function destroy($id){
        return 'Excluindo produto' .  $id;
    }

}
