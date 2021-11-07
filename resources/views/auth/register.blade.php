<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sweets Emporium</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_register.css') }}">
</head>
<body>
    <form method="POST" action="{{ route('register') }}" class="registerbox">
        @csrf
        <img src="{{ asset('assets/logo.png') }}" class="logo">
        <h1>Register Here</h1>


        <div class="registerinputBox" id="usernamebox">
             <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
             <label>{{ __('Name') }}</label>
            </div>


  <div class="registerinputBox" id="emailbox">
             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
             <label>{{ __('E-Mail Address') }}</label>
            </div>


            <div class="registerinputBox" class="passwordbox">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <label>{{ __('Password') }}</label>                
            </div>

            <div class="registerinputBox" id="confirmpasswordbox">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                <label for="password-confirm">{{ __('Confirm Password') }}</label>                
            </div>

        <button type="submit"> {{ __('Register') }} </button>

         @if (Route::has('login'))
                <a class="nav-link" href="{{ route('login') }}">Already have an account?</a>
         @endif
    </form>
</body>
</html>
                   
