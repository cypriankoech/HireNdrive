<!-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    CSRF Token
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    Scripts
    <script src="{{ asset('js/app.js') }}" defer></script>

    Fonts
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    Styles
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    Left Side Of Navbar
                    <ul class="navbar-nav me-auto">

                    </ul>

                    Right Side Of Navbar
                    <ul class="navbar-nav ms-auto">
                        Authentication Links
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/registration.css') }}">
</head>

<body>
    <div class="container">
        <div class="login-registration">
            <form class="login-form" method="POST" action="{{ route('login') }}">
                @csrf
                <h2 class="title">Login</h2>
                <div class="input-field">
                    <i class="fa-user-circle"></i>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocustype="text" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fa-lock"></i>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                </div>

                <input type="submit" value="Login" class="btn">

                <p class="social-text">or sign in with your social platform</p>
                <div class="social-media">
                    <a href="" class="social-icon"> <i class="fa-google"></i></a>
                    <a href="" class="social-icon"><i class="fa-google-plus-official"></i></a>
                    <a href="" class="social-icon"><i class="fa-facebook"></i></a>
                    <a href="" class="social-icon"><i class="fa-twitter"></i></a>
                </div>
            </form>

            <form method="POST" action="{{ route('register') }}" class="registration-form">
                @csrf
                <h2 class="title">Registration</h2>
                <div class="input-field">
                    <i class="fa-user-circle"></i>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                </div>
                <div class="input-field">
                    <i class="fa-user-circle"></i>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fa-birthday-cake"></i>
                    <input id="dob" type="text" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required placeholder="Date of Birth" onfocus="(this.type='date')" autofocus="disabled">
                </div>
                <div class="input-field">
                    <i class="fa-lock"></i>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                </div>
                <div class="input-field">
                    <i class="fa-lock"></i>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                </div>
                <input type="submit" value="Register" class="btn">

                <p class="social-text">or Register with your social platform</p>
                <div class="social-media">
                    <a href="" class="social-icon"> <i class="fa-google"></i></a>
                    <a href="" class="social-icon"><i class="fa-google-plus-official"></i></a>
                    <a href="" class="social-icon"><i class="fa-facebook"></i></a>
                    <a href="" class="social-icon"><i class="fa-twitter"></i></a>
                </div>
            </form>

        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Member of Hire n' Drive?</h3>
                    <p>Login and enjoy our discounted prices on the car of your choice. If not, create an account and enjoy.</p>
                    <button class="btn" id="login-btn">Login</button>
                </div>
                <img src="{{ asset('images/order 1.svg') }}" alt="" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>New to Hire n' Drive?</h3>
                    <p>Create an account and enjoy with us.</p>
                    <button class="btn" id="registration-btn">Register</button>
                </div>
                <img src="{{ asset('images/sale.svg') }}" alt="" class="image">
            </div>
        </div>
    </div>

    <script src="{{ asset('js/registration.js') }}"></script>

</body>

</html>