@extends('_partials.main')

@section('main')
    <main class="main_two">
        <div class="h_container">
            <h2 class="item_main_two">Create Item</h2>
        </div>

        <div class="container_main_two">
            <div class="preview">
                <div class="background">
                    <div class="image_container">
                        <img  class="preview-img">
                    </div>
                    <div class="text_one">
                        <h2 class="card-name">Name</h2>
                        <span>BSC</span>
                    </div>
                    <div class="text_two">
                        <div class="div">
                            <div class="img_profile">
                
                            </div>
                            <div class="creator">
                                <h2>Creator</h2>
                                <h3 class="name">{{auth()->user()->name}}</h2>
                            </div>
                        </div>
                        <div class="current">
                            <h2>Current Bid</h2>
                            <h3 class="card-price">Price</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="inputs_container">
                <form action="{{route('nfts.store')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    

                    <label>Upload File
                        <input name='image' class="img-input" type="file" placeholder="PNG, JPG, GIF, WEBP pr MP4 Max200mb">
                    </label>
                    <br>
                    <label>Price
                        <input name='price' class="nft-price" type="text" value="">
                    </label>
                    <br>
                    <label>Name
                        <input name='name' class="nft-name" type="text" value=''>
                    </label>
                    <br>
                    <label>Description
                        <input name='description' class="nft-description" type="text" value="">
                    </label>
                    <br>
                    <div class="inputs_container_two">
                        <label>Royalties
                            <input class="input" name='royalty' type="text">
                        </label>
                        <label>Collection
                            <select class="input" name="collection_id">
                                <option value="0">Select Collection</option>
                                @foreach($collections as $collection)
                                    <option value="{{$collection->id}}">{{$collection->name}}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>
                    <button type='submit' class="create__btn nft__create">Create</button>
                </form>
                </div>
            </div>
        </div>
    </main>
@endsection