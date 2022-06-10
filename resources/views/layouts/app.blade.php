<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="css/home.css">
    <title>Hire n' Drive</title>
</head>
<body>
    <header>
        <a href="#" class="logo"><img src="images/download.png" alt=""></a>

        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#rental">Book Now</a></li>
            <li><a href="#locations">Locations</a></li>
            <li><a href="#tours">Tours</a></li>
            <li><a href="#contacts">Contacts</a></li>
        </ul>
        <div class="header-btn">
            @guest
                @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="register">{{ __('Register') }}</a>
                @endif

                @if (Route::has('register'))
                    <a href="{{ route('login') }}" class="login">{{ __('Login') }}</a>
                @endif
            @else
                <a href="#" class="register">{{ Auth::user()->name }}</a>
                <a class="login" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
            @endguest
        </div>
    </header>
    @yield('content')
</body>
</html>