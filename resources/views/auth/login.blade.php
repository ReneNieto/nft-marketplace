@extends('_partials.main')

@section('main')
    <main class="main_two_login">
        <div class="h_container">
            <h2 class="item_main_two">Login</h2>
        </div>
            <div class="login__input-container">
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <label>
                        <input name='email' type="text" placeholder="Enter your email" class="login__input">
                    </label>
                    <br>
                    <label>
                        <input name='password' type="Password" placeholder="Enter your Password" class="login__input">
                    </label>
                    <br>
                    <button type='submit' class="login__submit">login</button>
                </form>
            </div>
    </main>
@endsection