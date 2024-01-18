const deconnecter = document.getElementById("deconnecter");

deconnecter.addEventListener("click", () => {
    window.location.href = "index.php?disconnected=true";
});