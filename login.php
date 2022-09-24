

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>

<body>

    <div class="container" id="container">
        <!-- Sign Up -->
        <div class="container__form container--signup">
            <form action="#" class="form" id="form1">
                <h2 class="form__title">Sign Up</h2>
                <input type="text" placeholder="Username" class="input" />
                <input type="email" placeholder="Email" class="input" />
                <input type="number" placeholder="Phone Number" class="input" />
                <input type="password" placeholder="Password" class="input" />
                <button class="btn" onclick="signUp()">Sign Up</button>

                <div class="spinner"></div>
            </form>
        </div>

        <!-- Sign In -->
        <div class="container__form container--signin">
            <form action="#" class="form" id="form2">
                <h2 class="form__title">Sign In</h2>
                <input type="email" placeholder="Username" class="input" />
                <input type="password" placeholder="Password" class="input" />
                <a href="forgot.php" class="link">Forgot your password?</a>
                <button class="btn" onclick="signIn()">Sign In</button>
                <p id="signin_response">&nbsp;</p>
            </form>
        </div>

        <!-- Overlay -->
        <div class="container__overlay">
            <div class="overlay" id="overlay">
                <div class="overlay__panel overlay--left">
                    <button class="btn" id="signIn" onclick="signInBtn()">Sign In</button>
                    <div class="spinner" id="signUp_loader"></div>
                </div>
                <div class="overlay__panel overlay--right">
                    <button class="btn" id="signUp" onclick="signUpBtn()">Sign Up</button>
                    <div class="spinner" id="signIn_loader" ></div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/libraries/jquery-3.6.0.js" ></script>
    <script src="js/login.js"></script>

</body>

</html>