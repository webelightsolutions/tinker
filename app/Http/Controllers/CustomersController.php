<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Customer;
use App\customerAddress;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::with('customerAddresses')->get();
        return Response::json($customers, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[

            'name' => 'required|max:255',

            'email' => 'required|email',

            'contact_number' => 'required|max:10',

            'address' => 'required|max:200',

            ]);


        // if ($validator->fails()) {
        // return redirect('/')
        //     ->withInput()
        //     ->withErrors($validator);

       Customer::create($request->all());

        return redirect ('customer/create');

       
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        return view('customer.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customer.edit',compact('customer'));
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
        $validator = Validator::make($request->all(), [

        'name' => 'required|max:255',

        'email' => 'required|email',

        'contact_number' => 'required|max:10',

        'address' => 'required|max:200',

        ]);

        $customers = Customer::findOrFail($id);
        if ($customers) {
            $customers->fill($request->all());
            $customers->save();

        }
        
    return redirect('customer');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Customer::where('id', $id)->delete();
        return redirect('customer');
    }
}
