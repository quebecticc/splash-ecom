<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Forgot</title>
</head>

<body>

    <div class="container" id="container">
        <!-- Sign Up -->
        <div class="container__form container--signup">
            <form action="#" class="form" id="form1">
                <h2 class="form__title">Verify Your Email</h2>
                <input type="number" placeholder="Enter the OTP sent to your E-mail" class="input" />
                <p id="signup_response"></p>
                <button class="btn" onclick="verifyResetPin()">Verify</button>

                <div class="spinner"></div>
            </form>
        </div>

        <!-- Sign In -->
        <div class="one">
            <div class="container__form container--signin">
                <form action="#" class="form" id="form2">
                    <h2 class="form__title">Forgot Your Password?</h2>
                    <p>Relax, It Happens with the best of us!</p>
                    <input type="password" placeholder="Enter Your Email" class="input" />
                    <a href="login.php" class="link">Remembered Your Password?</a>
                    <p id="signin_response"></p>
                    <button class="btn" onclick="verifyEmail()">Reset Password</button>
                </form>
            </div>
        </div>
        <div class="two">
            <div class="container__form container--signin">
                <form action="#" class="form" id="form3">
                    <h2 class="form__title">Here you go!</h2>
                    <p>Create a <strong>strong</strong> and <strong>secure</strong> password that you will <strong>remember</strong> </p>
                    <input type="password" placeholder="Enter a new password" class="input" />
                    <input type="password" placeholder="Confirm your new password" class="input" />
                    <p id="password_response"></p>
                    <button class="btn" onclick="resetPassword()">Reset Password</button>
                </form>
            </div>
        </div>
        

        <!-- Overlay -->
        <div class="container__overlay">
            <div class="overlay" id="overlay">
                <div class="overlay__panel overlay--left">
                    <button class="btn" id="reset_start" onclick="signInBtn()">Back</button>
                    <div class="spinner" id="signUp_loader"></div>
                </div>
                <div class="overlay__panel overlay--right">
                    <div class="spinner" id="signIn_loader"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/libraries/jquery-3.6.0.js" ></script>
    <script src="js/login.js"></script>

</body>

</html>