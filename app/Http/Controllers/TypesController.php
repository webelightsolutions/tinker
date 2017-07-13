<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use App\Type;

class TypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::with('lookups')->get();    
        return Response::json($types, 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50|unique:types',
            'alias' => 'required|max:50|unique:types'
        ]);

        if ($validator->fails()) {
            return Response::json($validator->errors(), 422);
        }

        Type::create($request->all());
        return Response::json(['description' => 'Type has been stored successfully.'], 200);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $type = Type::findOrFail($id);
        return Response::json($type, 200);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type = Type::findOrFail($id);
        return Response::json($type, 200);
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
            'name' => 'required|max:50',
            'alias' => 'required|max:50'
        ]);

        if ($validator->fails()) {
            return Response::json($validator->errors(), 422);
        } 

        $type = Type::find($id);

        if ($type) {
            $type->fill($request->all());
            $type->save();
            return Response::json(['description' => 'Type has been updated successfully.'], 200);
        } else {
            return Response::json(['description' => 'Type details not found', 404]);
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
        Type::where('id', $id)->delete();
        return Response::json(['description' => 'Type Details Delete successfully.'], 200);
}
}
