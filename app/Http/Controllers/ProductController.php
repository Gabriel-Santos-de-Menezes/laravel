<?php

namespace App\Http\Controllers;

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $request;

    public function __construct(Request $request){

        //dd($request->pm1);//apresenta e morre
        $this->request = $request;

        //$this->middleware('auth');//Middleware em todos os métodos

        //direto no controller
        /* $this->middleware('auth')->only([//Middleware em um determinado método
            'create', 'store'
        ]); */
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$test = '<h1>Hello</h1>';
        $test = 123;
        $products = [1,2,3,4];
        /* return view('test',[
            'test' => $test
        ]); */

        return view('admin.pages.products.index', compact('test', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //exibe a view de cafastro de formulários
        return view('admin.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //cria
        /* dd('Cadastrando...'); */
        /* dd($request->only(['name', 'description'])); */
        /* dd($request->name()); */
        /* dd($request->has('name')); */
        /* dd($request->input('name', 'default')); */
        /* dd($request->except('_token')); */
        if($request->file('photo')->isValid()){
            /* dd($request->photo->extension()); */
            //dd($request->file('photo')->store('products'));
            $nameFile = $request->name . '.' . $request->photo->extension();
            dd($request->file('photo')->storeAs('products', $nameFile));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //editar 
        return view('admin.pages.products.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //atualiza os registros
        dd("Editando produto");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
