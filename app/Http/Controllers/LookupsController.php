<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use App\Lookup;

class LookupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lookups = Lookup::with('types')->get();
        return Response::json($lookups, 200);
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'type_id' => 'required',
            'name' => 'required|max:50'
        ]);

        if ($validator->fails()) {
            return Response::json($validator->errors(), 422);
        }

        Lookup::create($request->all());
        return Response::json(['description' => 'Lookups has been stored successfully.'], 200);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lookup = Lookup::findOrFail($id);
        return Response::json($lookup, 200);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lookup = Lookup::findOrFail($id);
        return Response::json($lookup, 200);
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
            'type_id' => 'required',
            'name' => 'required|max:50'
        ]);

        if ($validator->fails()) {
           return Response::json($validator->errors(), 422);
        }

        $lookups = Lookup::find($id);

        if ($lookups) {
            $lookups->fill($request->all());
            $lookups->save();
            return Response::json(['description' => 'Lookups has been updated successfully.'], 200);
        } else {
            return Response::json(['description' => 'Lookups details not found'], 404);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lookup::where('id',$id)->delete();
        return Response::json(['description' => 'Lookup Details Delete successfully.'], 200);
    }
}
