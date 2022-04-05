<?php

namespace App\Http\Controllers;

use App\Models\collection;
use App\Models\Nft;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class NftController extends Controller
{
    public function index()
    {
        //
    }


    public function create()
    {
        $collections = Collection::all();
        return view('nfts.create', [
            'nft' => null,
            'collections' => $collections,
        ]);
    }


    public function store(Request $request)
    {


        $nft = new Nft();
        $nft->name = $request->name;
        $nft->description = $request->description;
        $nft->collection_id = $request->collection_id;
        $nft->price = $request->price;
        $nft->author_id = auth()->id();
        $nft->owner_id = auth()->id();
        $nft->royalty = $request->royalty;
        $image = $request->file('image');
        $nft->image_src = $image->store('image', 'public');
        $nft->save();

        return redirect()->intended(RouteServiceProvider::HOME);
    }


    public function show(Nft $nft)
    {
    }


    public function edit(Nft $nft)
    {
        //
    }


    public function update(Request $request, Nft $nft)
    {
        //
    }


    public function destroy(Nft $nft)
    {
        //
    }
}
