function login() {

    var admin = document.getElementById("login").value;
    var pass = document.getElementById("pass").value;

    if (admin == "admin" && pass == "admin") {
        location.href = "?administrador";
    } else {
        window.alert("Validacion incorrecta");
    }

}