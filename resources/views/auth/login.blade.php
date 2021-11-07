<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sweets Emporium</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_login.css') }}">
</head>    
<body>
    <form method="POST" action="{{ route('login') }}" class="loginbox">
        @csrf
        <img src="{{ asset('assets/logo.png') }}" class="logo">
        <h1>Login Here</h1>

        <div class="inputBox" id="usernamebox">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <label>{{ __('E-Mail Address') }}</label>
        </div>


        <div class="inputBox" id="passwordbox">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <label>{{ __('Password') }}</label>                
        </div>


        <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>

        <button type="submit">
            {{ __('Login') }}
        </button>

        <a class="nav-link" href="{{ route('register') }}">Don't have an account?</a>


    </form>
</body>
</html>



