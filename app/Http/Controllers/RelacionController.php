<?php

namespace App\Http\Controllers;

use App\Models\marital;
use App\Models\condition;
use App\Models\User;
use App\Models\product;
use App\Models\order;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use Log;

class RelacionController extends Controller
{
    public function index(){
        $products = product::all();
        $orders = order::all();
        $users = User::all();
        $conditions = Condition::all();
        $maritals = Marital::all();
        return view('welcome', compact('products','orders','users','conditions','maritals'));

    }
     public function create(){
        $conditions = Condition::all();

        return view('create', compact('conditions'));

    
    }

    public function store(StoreProductRequest $request1){
        Log::info($request1->all());
        //Validando datos
        $validated = $request1->validated();

         product::create($validated);
         return redirect()->route('product.index');

    }

    public function edit($id){
         $product44 = product::where('id', $id)->first();
          Log::info($product44);
         return view('edit', compact('product44'));


    }

        public function update(StoreProductRequest $request1){
        Log::info($request1->all());
        //Validando datos
        $validated = $request1->validated();

         product::save($validated);
         return redirect()->route('product.index');
        }

}  
