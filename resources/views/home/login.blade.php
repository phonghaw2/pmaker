<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/home/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/auth.css') }}">
    <title>Login</title>
</head>
<body>
    <div class="login-background-image fade-in lazyloaded"
    style="background-image:url(../images/background-login.png)">
    <div id="customer" class="customer-login-wrapper">
        <div class="template_header">
            <h1 class="h2 feature-header cc-animate-init feature-header--visible -in cc-animate-complete">Login</h1>
        </div>

        <form method="post" action="{{ route('account.login_action') }}" accept-charset="UTF-8" >
            @csrf
            <div data-cc-animate-delay="0.2s"  style="">

            </div>
            <div class="form">
                <div id="login_email" class="input-row "
                    data-cc-animate-delay="0.2s" style="">
                    <input aria-label="Email" placeholder="Email" type="email" value="" name="email" id="customer_email" class="large" size="30">
                </div>

                <div id="login_password" class="input-row">
                    <input aria-label="Password" placeholder="Password" type="password" value="" name="password" id="customer_password"
                        class="large password " size="16"
                        data-cc-animate-delay="0.35s">
                    <div id="forgot_password" data-cc-animate-delay="0.5s" style="">
                        <a href="#" id="recover-approve">Forgot your password?</a>
                    </div>
                </div>

                <div class="wide-action">
                    <input type="submit" value="Sign In" data-cc-animate-delay="0.6s"style="">
                    <p class="note">
                        <a href="{{ route('account.signup') }}" data-cc-animate-delay="0.75s" style="">
                            Create account
                        </a>
                    </p>
                    <span class="note">
                        <a href="{{ route('index') }}" data-cc-animate-delay="0.9s" style="">
                            Return to Pmaker
                        </a>
                    </span>
                </div>
            </div>
            <input type="hidden" name="return_url" value="/account">
        </form>
    </div>

    <div id="recover-part" class="customer-login-wrapper" style="display: none">
        <div class="template_header">
            <h2 class="title">Reset your password</h2>
            <p class="note">We will send you an email to reset your password.</p>
        </div>
        <form method="post" action="{{ route('account.recover') }}" accept-charset="UTF-8">
            @csrf
            <div class="form">
                <div id="recover_email" class="input-row">
                    <input aria-label="Email" placeholder="Email" type="email" value="" size="30" name="email" id="recover-email" class="large">
                </div>

                <div class="wide-action">
                    <input type="submit" value="Submit">
                    <span class="note"><a href="#" id="recover-cancel">Cancel</a></span>
                </div>
            </div>
        </form>
    </div>
    <script>
        document.getElementById("recover-approve").onclick = function() {
            document.getElementById('recover-part').style.display = 'block';
            document.getElementById('customer').style.display = 'none';
        };
        document.getElementById("recover-cancel").onclick = function() {
            document.getElementById('recover-part').style.display = 'none';
            document.getElementById('customer').style.display = 'block';
        };
    </script>
</body>
</html>

