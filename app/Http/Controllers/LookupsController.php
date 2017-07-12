<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LookupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lookups = Lookup::with('type_id','name')->get()->toArray();
        dd($lookups);
        return view('lookups.index',compact('lookups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lookup.create');
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

            'type_id' => 'required',

            'name' => 'required',

            ]);

        Lookup::create($request->all());

       return redirect ('lookup.create');

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
        return view('lookup.show', compact('lookup'));
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
        return view('lookup.edit', compact('lookup'));
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
        $validator = Validator::make($request->all(),[

            'type_id' => 'required',

            'name' => 'required',

            'value' => 'require'

            ]);

        $lookups = Lookup::findOrFail($id);
        if($lookups)
        {
            $lookups->fill($request->all);
            $lookups->save();
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
        return redirect('lookup');
    }
}
