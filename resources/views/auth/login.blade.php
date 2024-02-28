<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('login.css') }}">
    <title>Log in</title>
</head>
<body>
<form method="POST" action="{{ route('login') }}">
@csrf
<div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
            <a href="#" class="header-logo">
                <img src="./assets/images/logo/agrify.png" alt="Agrify logo" width="150" height="40">
              </a>
        </div>
    </nav>
    <div class="form-box">
    <div class="login-container" id="login">
            <div class="top">
                <<span>Don't have an account? <a href="{{ route('register') }}">Sign Up</a></span>
                <header>Login</header>
            </div>
            <div class="input-box">
                <input type="email" id="email" name="email" class="input-field" placeholder="Email" required autofocus>
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="password" id="password" name="password" class="input-field" placeholder="Password" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="login-check">
                    <label for="login-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Forgot password?</a></label>
                </div>
            </div>
            <button type="submit" class="submit">Login</button>
</div>
</form>
</body>
</html>
