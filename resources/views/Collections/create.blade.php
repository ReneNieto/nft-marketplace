@extends('_partials.main')

@section('main')
    <main class="main_two">
        <div class="h_container">
            <h2 class="item_main_two">Create Collection</h2>
        </div>
            <div class="collection__input-container">
                <form action="{{route('collections.store')}}" method="post">
                    @csrf

                    <label>
                        <input name='name' type="text" placeholder="Enter Name" class="collection__input">
                    </label>
                    <br>
                    <label>
                        <input name='description' type="text" class="collection__input" placeholder="Entre Description">
                    </label>
                    <br>

                    <button type='submit' class="collection__submit">Create</button>
                </form>
            </div>
@endsection