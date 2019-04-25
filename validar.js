function validar() {
    var usuario,contrasena;
    
    usuario = document.getElementById("usuario").value;
    contrasena = document.getElementById("contrasena").value;
    

    

    if (usuario === " " || contrasena === "") {
        alert("Todos los campos son obligatorios");
        return false;
    }
    else if (usuario.length > 45 || contrasena.length > 45) {
        alert("Los compos contienen mas carecteres que los permitidos");
        return false;
    }

}

