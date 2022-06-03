<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="css/registration.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="login-registration">
            <form method="POST" action="{{ route('login') }}" class="login-form">
                @csrf
                <h2 class="title">Login</h2>
                <div class="input-field">
                    <i class="bx bxs-user"></i>
                    <input placeholder="Email" id="email" type="email" class="form-control @error('email','login') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>
                @error('email','login')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="input-field">
                    <i class='bx bxs-lock'></i>
                    <input type="password" placeholder="Password" id="password" class="form-control @error('password','login') is-invalid @enderror" name="password" required autocomplete="current-password">
                </div>
                @error('password','login')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <input type="submit" value="Login" class="btn">

                <p class="social-text">or sign in with your social platform</p>
                <div class="social-media">
                    <a href="" class="social-icon"><i class='bx bxl-google'></i></a>
                    <a href="" class="social-icon"><i class='bx bxl-google-plus'></i></a>
                    <a href="" class="social-icon"><i class='bx bxl-facebook'></i></a>
                    <a href="" class="social-icon"><i class='bx bxl-twitter'></i></a>
                </div>
            </form>

            <form class="registration-form" method="POST" action="{{ route('register') }}">
                @csrf
                <h2 class="title">Registration</h2>
                <div class="input-field">
                    <i class="bx bxs-user"></i>
                    <input type="text" placeholder="Name" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                </div>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <div class="input-field">
                    <i class="bx bxs-user"></i>
                    <input placeholder="Email" id="reg_email" type="email" class="form-control @error('email_2') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                </div>
                @error('email_2')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <div class="input-field">
                    <i class='bx bxs-cake'></i>
                    <input type="date" id="dob" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required autocomplete="dob">
                </div>
                @error('dob')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <div class="input-field">
                    <i class='bx bxs-lock'></i>
                    <input type="password" placeholder="Password" id="reg_password" class="form-control @error('password_2') is-invalid @enderror" name="password" required autocomplete="new-password">
                </div>
                @error('password_2')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <div class="input-field">
                    <i class='bx bxs-lock'></i>
                    <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>

                <input type="submit" value="Register" class="btn">

                <p class="social-text">or Register with your social platform</p>
                <div class="social-media">
                    <a href="" class="social-icon"><i class='bx bxl-google'></i></a>
                    <a href="" class="social-icon"><i class='bx bxl-google-plus'></i></a>
                    <a href="" class="social-icon"><i class='bx bxl-facebook'></i></a>
                    <a href="" class="social-icon"><i class='bx bxl-twitter'></i></a>
                </div>
            </form>

        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Member of Hire n' Drive?</h3>
                    <p>Login and enjoy our discounted prices on the car of your choice. If not, create an account and
                        enjoy.</p>
                    <button class="btn" id="login-btn">Login</button>
                </div>
                <img src="images/order 1.svg" alt="" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>New to Hire n' Drive?</h3>
                    <p>Create an account and enjoy with us.</p>
                    <button class="btn" id="registration-btn">Register</button>
                </div>
                <img src="sale.svg" alt="" class="image">
            </div>
        </div>
    </div>

    <script src="js/app_login.js"></script>

</body>

</html>
