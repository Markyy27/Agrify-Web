<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('login.css') }}">

    <title>Registration</title>
</head>
<body>
<div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
            <a href="#" class="header-logo">
                <img src="./assets/images/logo/agrify.png" alt="Agrify logo" width="150" height="40">
              </a>
        </div>
    </nav>
    <div class="form-box">
    <div class="register-container" id="register">
    <div class="top">
        <span>Have an account? <a href="{{ route('login') }}">Login</a></span>
        <header>Sign Up</header>
    </div>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="two-forms">
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Firstname" id="first_name" name="first_name" value="{{ old('first_name') }}" required autofocus>
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Lastname" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
                <i class="bx bx-user"></i>
            </div>
        </div>

        <div class="input-box">
            <input type="email" class="input-field" placeholder="Email" id="email" name="email" value="{{ old('email') }}" required>
            <i class="bx bx-envelope"></i>
        </div>

        <div class="input-box">
            <input type="password" class="input-field" placeholder="Password" id="password" name="password" required>
            <i class="bx bx-lock-alt"></i>
        </div>

        <div class="input-box">
            <input type="password" class="input-field" placeholder="Confirm Password" id="password_confirmation" name="password_confirmation" required>
            <i class="bx bx-lock-alt"></i>
        </div>

        <div class="input-box">
            <button type="submit" class="submit">Register</button>
        </div>

        <div class="two-col">
            <div class="one">
                <input type="checkbox" id="register-check" name="remember">
                <label for="register-check"> Remember Me</label>
            </div>
            <div class="two">
                <label><a href="#">Terms & conditions</a></label>
            </div>
        </div>
    </form>
</div>

    </div>
</div>        
</body>
</html>