<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="KaungMyat.JohnBosco">
    <title>{{ config('app.name', 'FoodWork Dine') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet"
        href="{{ asset('customSignUpAndSignIn/fonts/material-icon/css/material-design-iconic-font.min.css')}}">
    <!-- Styles -->
    <link href="{{ asset('customSignUpAndSignIn/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="main">
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{ asset('customSignUpAndSignIn/images/signin-image.jpg')}}" alt=""></figure>
                        <a href="{{ route('register') }}" class="signup-image-link">Create an account</a>
                    </div>
                    <div class="signin-form">
                        <h2 class="form-title">WELCOME! Please Sign In</h2>
                        <form action="{{ route('login') }}" class="register-form" id="login-form" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" id="email" class="@error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus
                                    placeholder="Enter email" />

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" id="password" class="@error('password') is-invalid @enderror"
                                    name="password" required autocomplete="current-password"
                                    placeholder="Enter Password" />

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input class="agree-term" type="checkbox" name="remember-me" id="remember-me" />

                                <label class="label-agree-term" for="remember-me">
                                    <span><span></span></span>Remember me
                                </label>
                            </div>
                        </form>

                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"
                                form="login-form" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
