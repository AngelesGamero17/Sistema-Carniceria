<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        $orders = Order::where('status','=','0')->where('overall_weight','LIKE','%'.$buscarpor.'%')->orwhere('total_price','LIKE','%'.$buscarpor.'%')->get();
        $orders1 = Order::where('status','=','1')->where('overall_weight','LIKE','%'.$buscarpor.'%')->orwhere('total_price','LIKE','%'.$buscarpor.'%')->get();
        
        return view('Orders.index',compact('orders','orders1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $orders = Order::all();
        return view('Orders.create',compact('orders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        Log::info($request->all());
        //Validando datos
        $validated = $request->validated();

         order::create($validated);
         return redirect()->route('Orders.index');
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
        $order17 = order::where('id',$id)->first();
        Log::info(($order17));
        return view('Orders.edit',compact('order17'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreOrderRequest $request, $order17)
    {

        Log::info($request->all());
        //Validando datos
        $validated = $request->validated();
        $order1=Order::find($order17);
        $order1->overall_weight=$request->overall_weight;
        $order1->total_price=$request->total_price;
        $order1->status=$request->status;
        $order1->save();
         return redirect()->route('Orders.index');
    }       

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($order)
    {
        $order=Order::find($order);
        $order->delete();
        return redirect()->route('Orders.index');
    }
}
