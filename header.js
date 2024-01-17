const logo = document.getElementById("logo-header");
const login_link = document.getElementById("login-link");
const member_link = document.getElementById("member-link");

logo.addEventListener("click", () => {
    window.location.href = "index.php";
});

if (login_link != null) {
    login_link.addEventListener("click", () => {
        window.location.href = "login.php";
    });
}

if (member_link != null) {
    member_link.addEventListener("click", () => {
        window.location.href = "membre.php";
    });
}