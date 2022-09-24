const firstForm = document.getElementById("form1");
const secondForm = document.getElementById("form2");
const container = document.getElementById("container");

function signInBtn() {
  container.classList.remove("right-panel-active");
}

function signUpBtn() {
  container.classList.add("right-panel-active");
}

firstForm.addEventListener("submit", (e) => e.preventDefault())
secondForm.addEventListener("submit", (e) => e.preventDefault());

function signIn() {
  $("#signUp").hide();
  document.getElementById("overlay").className = "overlay overlay_dark";
  $("#signIn_loader").css("display", "grid");

  setTimeout(function () {
    var signin_username = $("#signin_username").val();
    var signin_password = $("#signin_password").val();
    $.post(
      "assets/parsers/credential_parser.php",
      {
        signin_username: signin_username,
        signin_password: signin_password,
      },
      function (result) {
        console.log(result);
        if (result == 1) {
          $("#signIn_loader").fadeOut();
          $("#signin_response").css("color", "green");
          document.getElementById("signin_response").innerHTML =
            "Logged In. You will be redirected shortly.";
        } else {
          $("#signIn_loader").fadeOut();
          setTimeout(function () {
            $("#signUp").show();
            document.getElementById("overlay").className = "overlay";
          }, 600);
          $("#signin_response").css("color", "red");
          document.getElementById("signin_response").innerHTML =
            "Wrong Username or Password.";
        }
      }
    );
  }, 1000);
}

function signUp() {
  $("#signIn").fadeOut(300);
  document.getElementById("overlay").className = "overlay overlay_dark";
  setTimeout(function () {
    $("#signUp_loader").css("display", "grid");
  }, 310);
}

function verifyEmail() {
  document.getElementById("overlay").className = "overlay overlay_dark";
  $("#signIn_loader").css("display", "grid");
  var forgot_email = $("#forgot_email").val();
  $.post(
    "assets/parsers/credential_parser.php",
    {
      forgot_email: forgot_email,
    },
    function (result) {
      if (result == 1) {
        $("#signIn_loader").fadeOut();
        $("#signin_response").css("color", "green");
        container.classList.add("right-panel-active");
      } else {
        $("#signIn_loader").fadeOut();
        setTimeout(function () {
          $("#signUp").show();
          document.getElementById("overlay").className = "overlay";
        }, 600);
        $("#signin_response").css("color", "red");
        document.getElementById("signin_response").innerHTML =
          "Wrong or Invalid Email. Please make sure that you have an account.";
      }
    }
  );
}

function verifyResetPin() {
  $('#reset_start').hide()
  document.getElementById("overlay").className = "overlay overlay_dark";
  $("#signUp_loader").css("display", "grid");

  setTimeout(function () {
    var reset_otp = $("#reset_otp").val();
    $.post(
      "assets/parsers/credential_parser.php",
      {
        reset_otp: reset_otp
      },
      function (result) {
        console.log(result);
        if (result == 1) {
          $("#signUp_loader").fadeOut();
          $(".one").hide();
          $(".two").show();
          document.getElementById('container').classList.remove("right-panel-active")
          

        } else {
          
          $("#signUp_loader").fadeOut();
          setTimeout(function () {
            $('#reset_start').show()
            document.getElementById("overlay").className = "overlay";
          }, 600);
          $("#signup_response").css("color", "red");
          document.getElementById("signup_response").innerHTML =
            "Wrong OTP. Please Retry";
        }
      }
    );
  }, 1000);
}

function resetPassword() {
  $('#reset_start').hide()
  document.getElementById("overlay").className = "overlay overlay_dark";
  $("#signIn_loader").css("display", "grid");

  setTimeout(function () {
    var password = $("#password").val();
    $.post(
      "assets/parsers/credential_parser.php",
      {
        password: password
      },
      function (result) {
        console.log(result);
        if (result == 1) {
          window.location = 'login.php'
        } else {
          $("#signIn_loader").fadeOut();
          $("#password_response").css("color", "red");
          document.getElementById("password_response").innerHTML = "An Error Occurred. Please Try Again";
        }
      }
    );
  }, 1000);
}
