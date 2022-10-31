<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    protected $request;

    public function __construct(Request $request){
        $this->request = $request;
        //$this->middleware('auth')->only(['create', 'store']);
        //$this->middleware('auth')->only(['create', 'store']);
        // $this->middleware('auth')->except('index');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $test = 123;
        $test2 = 321;
        $test3 = [1, 2, 3, 4, 5];
        $products = ['Tv', 'Phone', 'Laptop'];

        return view('admin.pages.products.index', compact('test', 'test2', 'test3', 'products'));

        /* return view('test', [
            'test' => $test
        ]); */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create products with form
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
        // dd($request->all());
        // dd($request->only(['name', 'description']));
        // dd($request->name);
        // dd($request->input('name', 'default'));
        // dd('Registering new product');
        if ($request->file('photo')->isValid()){

            // dd($request->file('photo')->store('products'));
            $nameFile = $request->name . "." . $request->photo->extension();
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
        return "Products {$id}";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pages.products..edit', compact('id'));
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
        dd("Updating the product {$id}");
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
