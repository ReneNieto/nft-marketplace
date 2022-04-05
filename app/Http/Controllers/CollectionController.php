<?php

namespace App\Http\Controllers;

use App\Models\collection;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class CollectionController extends Controller
{

    public function index()
    {
    }


    public function create()
    {
        return view('collections.create');
    }


    public function store(Request $request)
    {
        $collection = new collection();
        $collection->user_id = auth()->user()->id;
        $collection->name = $request->name;
        $collection->description = $request->description;

        $collection->save();

        return redirect()->intended(RouteServiceProvider::HOME);
    }


    public function show(collection $collection)
    {
        //
    }


    public function edit(collection $collection)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, collection $collection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function destroy(collection $collection)
    {
        //
    }
}
