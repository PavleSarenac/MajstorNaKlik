$(document).ready(function () {

    $("#update-pass-btn").on("click", function () {
        window.location.replace("promeniLozinku.html");
    });

    $("#update-phone-btn").on("click", function () {
        window.location.replace("azurirajTelefon.html");
    });

    $("#update-city-btn").on("click", function () {
        window.location.replace("azurirajLokaciju.html");
    });

    $("#update-photo-btn").on("click", function () {
        window.location.replace("azurirajProfilnu.html");
    });

    $("#chatGPT-btn").on("click", function () {
        window.location.replace("chatbot.html");
    });

});