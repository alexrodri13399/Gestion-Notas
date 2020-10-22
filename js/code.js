function validacionForm() {
    //alert("Hello World");
    var email=document.getElementById('email').value;
    var password=document.getElementById('psswd').value;
    //la funcion acaba cuando encuentra un return (con el primero ya acaba).
    //Se podria poner un return false detro de cada if pero para ahorrar codigo se pòne al final y ya esta.
    //El innerHTML muestra el mensaje en el div del login.php con el id message.
    if (email=='' && password=='') {
        document.getElementById("message").innerHTML = "Los dos campos estan vacios.";
    } else if (email=='') {
        document.getElementById("message").innerHTML = "El email está vacio.";
    } else if (password==''){
        document.getElementById("message").innerHTML = "El password está vacio.";
    } else{
        return true;
    }
    return false;
}