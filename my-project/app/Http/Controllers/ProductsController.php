<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        $products = Product::where('status','=','1')->where('name','LIKE','%'.$buscarpor.'%')->get();
        return view('Products.index',compact('products'));
    }  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('Products.create',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        Log::info($request->all());
        //Validando datos
        $validated = $request->validated();

         product::create($validated);
         return redirect()->route('Products.index');
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
        $product17 = product::where('id',$id)->first();
        Log::info(($product17));
        return view('Products.edit',compact('product17'));
    }
    
    public function update(StoreProductRequest  $request,$product17)
    {
        Log::info($request->all());
        //Validando datos
        $validated = $request->validated();
        $products=Product::find($product17);
        $products->name=$request->name;
        $products->unit_price=$request->unit_price;
        $products->stock=$request->stock;
        $products->id_condition=$request->id_condition;
        $products->status=$request->status;
        $products->save();
        return redirect()->route('Products.index');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {
        $product=Product::find($product);
        $product->delete();
        return redirect()->route('Products.index');

    }
}

