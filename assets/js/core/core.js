$(document).ready(function () {
    $("#registerForm").submit(function (e) { 
        e.preventDefault();
        console.log("Form submitted!");
    });
});