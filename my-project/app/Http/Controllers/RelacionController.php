<?php

namespace App\Http\Controllers;

use App\Models\Marital;
use App\Models\Condition;
use App\Models\Usertwo;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;

class RelacionController extends Controller
{
    public function index(){
        $products = Product::all();
        $orders = Order::all();
        $users = Usertwo::all();
        $conditions = Condition::all();
        $maritals = Marital::all();
        return view('/auth.login', compact('products','orders','userstwo','conditions','maritals'));

    }

}