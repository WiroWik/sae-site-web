const logo = document.getElementById("logo-header");
const loginLink = document.getElementById("login-link");

logo.addEventListener("click", () => {
    window.location.href = "index.php";
});

loginLink.addEventListener("click", () => {
    window.location.href = "login.php";
});