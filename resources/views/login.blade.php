@extends('layouts.app')

@section('title', 'Login to Your Account')

@section('data-page-id', 'auth')

@section('content')

    <div class="auth" id="auth" style="padding: 6rem;">

        <section class="login_form">
            <div class="cell medium-6 grid-x">
                <div class="small-12 medium-7 medium-centered">
                    <h2 class="text-center">Login</h2>
                    @include('includes.message')
                    <form action="/login" method="post">
                        <input type="text" name="username" placeholder="Your Username"
                               value="{{ \App\classes\Request::old('post', 'username') }}">

                        <input type="text" name="password" placeholder="Your Password">
                        <input type="hidden" name="token" value="{{ \App\classes\CSRFToken::_token() }}">
                        <button class="button float-right">Login</button>
                    </form>
                    <p>Not yet a member? <a href="/register">Register Here</a> </p>
                </div>
            </div>
        </section>

    </div>

@stop
