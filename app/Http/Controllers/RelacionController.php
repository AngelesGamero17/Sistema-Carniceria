<?php

namespace App\Http\Controllers;

use App\Models\Marital;
use App\Models\Condition;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;

class RelacionController extends Controller
{
    public function index(){
        $products = Product::all();
        $orders = Order::all();
        $users = User::all();
        $conditions = Condition::all();
        $maritals = Marital::all();
        return view('Welcome', compact('products','orders','users','conditions','maritals'));

    }

}