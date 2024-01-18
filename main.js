const send_doc = document.getElementById("download-register");

send_doc.addEventListener("click", () => {
    window.location.href = "download.php?path=InscriptionPlongee.pdf";
});