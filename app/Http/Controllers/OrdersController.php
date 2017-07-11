<?php

namespace App\Http\Controllers;

use App\Order;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $orders = Order::with('customer')->get()->toArray();
        dd($orders);

        return view('order.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
    //add new order for customer 
        $order = new App\Order(['message' => 'New']);

        $customer = App\Customer::find(1);

        $customer->orders()->save($order);

    //add multiple order for customer
        $customer = App\Customer::find(1);

        $customer->orders()->saveMany([
        new App\Order(['message' => 'A new order.']),
        new App\Order(['message' => 'Another order']),
        ]);


    //add new order for customer with use of array in create method
        $customer = App\Customer::find(1);

        $order = $customer->orders()->create([
             'message' => 'A new orders.',
        ]);

    //add multiple order for customer with use of array in create mehtod

        $customer = App\Customer::find(1);

        $customer->orders()->createMany([
        [
            'message' => 'A new order.',
        ],
         
        [
            'message' => 'Another new order.',
        ],

        ]);

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
        //
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
        //
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
