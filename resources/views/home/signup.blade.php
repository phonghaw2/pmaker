<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/home/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/auth.css') }}">
    <title>Signup</title>
</head>
<body>
    <div class="login-background-image fade-in lazyloaded" style="background-image:url(../images/background-login.png)">
    <div id="customer" class="customer-login-wrapper">
        <div class="template_header">
            <h1 class="h2 feature-header  feature-header--visible -in">Create Account</h1>
        </div>
        <form method="post" action="{{ route('account.signup_action') }}" accept-charset="UTF-8" >
            @csrf
            <div class="form">
                <div id="signup_name" class="input-row" data-cc-animate-delay="0.2s" style="">
                    <input aria-label="Name" placeholder="Name" type="text" value="{{ old('name')}}" name="name" size="30">
                </div>
                <div id="signup_email" class="input-row" data-cc-animate-delay="0.2s" style="">
                    <input aria-label="Email" placeholder="Email" type="email" value="{{ old('email')}}" name="email" size="30">
                </div>

                <div id="login_password" class="input-row">
                    <input aria-label="Password" placeholder="Password" type="password" value=""
                        name="password" class="password" size="16" autocomplete="on">
                    <div id="forgot_password" style="">
                        <a href="#" onclick="showRecoverPasswordForm();return false;">Forgot your password?</a>
                    </div>
                </div>

                <div class="wide-action">
                    <input type="submit" value="Create" style="">
                    <span class="note">
                        <a href="{{ route('index') }}"  style="">
                            Return to Pmaker
                        </a>
                    </span>
                </div>
            </div>
        </form>
    </div>



</body>
</html>

