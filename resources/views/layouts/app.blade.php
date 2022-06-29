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