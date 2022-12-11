<?php

namespace App\Http\Controllers;

use App\Models\marital;
use App\Models\condition;
use App\Models\user;
use App\Models\product;
use App\Models\order;
use Illuminate\Http\Request;

class RelacionController extends Controller
{
    public function index(){
        $products = product::all();
        $orders = order::all();
        $users = user::all();
        $conditions = condition::all();
        $maritals = marital::all();
        return view('welcome', compact('products','orders','users','conditions','maritals'));

    }

}