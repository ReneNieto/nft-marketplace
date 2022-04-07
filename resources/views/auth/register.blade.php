@extends('_partials.main')
@section('main')
<main>
    <div class="hero_signUp">
        <h1>Signup</h1>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/">Pages</a></li>
            <li><a href="/">Signup</a></li> 
        </ul>
    </div>
    <section class="sign_form">
        <h2>Sigup to NFTs</h2>
        <form  method="POST" action="{{ route('register') }}" class="register-form">
            @csrf

            <label>
                <input name="name" type="text" placeholder="Your full name " class="input">
            </label>
            <label>
                <input name="email" type="email" placeholder="Your email address" class="input">
            </label>
            <label>
                <input name="password" required type="password" placeholder="Set your password" class="input">
            </label>
            <label>
                <input name="password_confirmation" type="password" required autocomplete="new-password" placeholder="Confirm your password" class="input">
            </label>
            <div class="forgot_password">
                <label>
                    <input type="checkbox" class="checkbox" class="checkbox">
                    Remember me
                </label>
               
                <a href="{{route('login')}}">Already register?</a>
            </div>
           
            <button type="submit" class="primary_button">Login</button>
        </form>
    </section>
</main>
@endsection