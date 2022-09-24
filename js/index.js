const bar = document.getElementById("bar");
const nav = document.getElementById("navbar");
const close = document.getElementById("close");

if (bar) {
  bar.addEventListener("click", () => {
    nav.classList.add("pressed");
  });
}

if (close) {
  close.addEventListener("click", () => {
    nav.classList.remove("pressed");
  });
}

function changeTheme() {
  const toggle = document.getElementById("theme");
  const stylesheet = document.getElementById("stylesheet").href;
  console.log(stylesheet);
  if (toggle.checked == true) {
    document.getElementById("stylesheet").href = "css/dark.css";
  } else if (toggle.checked == false) {
    document.getElementById("stylesheet").href = "css/light.css";
  }
}

function goToShop() {
  window.location = "shop.php"
}

loggedIn = false

if (loggedIn == true) {
  document.getElementById("login").innerHTML = '<a href="profile.php"><i class="fa-solid fa-circle-user"></i></a>'
} else if (loggedIn == false) {
  document.getElementById("login").innerHTML = '<a href="login.php"><i class="fa-solid fa-right-to-bracket"></i></a>'
}