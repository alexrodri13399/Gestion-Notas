function validacionForm() {
    var email=document.getElementById('email').value;
    var password=document.getElementById('psswd').value;
    if (email=='' && password=='') {
        document.getElementsByTagName("label")[0].style.color = "red";
        document.getElementsByTagName("label")[1].style.color = "red";
        document.getElementById("email").style.borderColor = "red";
        document.getElementById("psswd").style.borderColor = "red";
    } else if (email=='') {
        document.getElementsByTagName("label")[0].style.color = "red";
        document.getElementsByTagName("label")[1].style.color = "black";
        document.getElementById("email").style.borderColor = "red";
        document.getElementById("psswd").style.borderColor = "gray";
    } else if (password==''){
        document.getElementsByTagName("label")[1].style.color = "red";
        document.getElementsByTagName("label")[0].style.color = "black";
        document.getElementById("psswd").style.borderColor = "red";
        document.getElementById("email").style.borderColor = "gray";
    } else{
        return true;
    }
    return false;

}

//formulario creacion de usuario.
/* 
function validacionForm1() {
    console.log("hola");
    var nombre=document.getElementById('nombre').value;
    var apellidop=document.getElementById('apellidop').value;
    var apellidom=document.getElementById('apellidom').value;
    var grupo=document.getElementById('grupo').value;
    var email=document.getElementById('email').value;
    var password=document.getElementById('psswd').value;
    if (nombre=='' && apellidop=='' && apellidom=='' && grupo=='' && email=='' && password=='') {
        document.getElementsByTagName("label")[0].style.color = "red";
        document.getElementsByTagName("label")[1].style.color = "red";
        document.getElementsByTagName("label")[2].style.color = "red";
        document.getElementsByTagName("label")[3].style.color = "red";
        document.getElementsByTagName("label")[4].style.color = "red";
        document.getElementsByTagName("label")[5].style.color = "red";
        document.getElementById("nombre").style.borderColor = "red";
        document.getElementById("apellidop").style.borderColor = "red";
        document.getElementById("apellidom").style.borderColor = "red";
        document.getElementById("grupo").style.borderColor = "red";
        document.getElementById("email").style.borderColor = "red";
        document.getElementById("psswd").style.borderColor = "red";
    } else if (nombre=='' && apellidop=='' && apellidom=='' && grupo=='' && email=='') {
        document.getElementsByTagName("label")[0].style.color = "red";
        document.getElementsByTagName("label")[1].style.color = "red";
        document.getElementsByTagName("label")[2].style.color = "red";
        document.getElementsByTagName("label")[3].style.color = "red";
        document.getElementsByTagName("label")[4].style.color = "red";
        document.getElementsByTagName("label")[5].style.color = "black";
        document.getElementById("nombre").style.borderColor = "red";
        document.getElementById("apellidop").style.borderColor = "red";
        document.getElementById("apellidom").style.borderColor = "red";
        document.getElementById("grupo").style.borderColor = "red";
        document.getElementById("email").style.borderColor = "red";
        document.getElementById("psswd").style.borderColor = "gray";
    } else if (nombre=='' && apellidop=='' && apellidom=='' && grupo=='') {
        document.getElementsByTagName("label")[0].style.color = "red";
        document.getElementsByTagName("label")[1].style.color = "red";
        document.getElementsByTagName("label")[2].style.color = "red";
        document.getElementsByTagName("label")[3].style.color = "red";
        document.getElementsByTagName("label")[4].style.color = "black";
        document.getElementsByTagName("label")[5].style.color = "black";
        document.getElementById("nombre").style.borderColor = "red";
        document.getElementById("apellidop").style.borderColor = "red";
        document.getElementById("apellidom").style.borderColor = "red";
        document.getElementById("grupo").style.borderColor = "red";
        document.getElementById("email").style.borderColor = "gray";
        document.getElementById("psswd").style.borderColor = "gray";
    } else if (nombre=='' && apellidop=='' && apellidom=='') {
        document.getElementsByTagName("label")[0].style.color = "red";
        document.getElementsByTagName("label")[1].style.color = "red";
        document.getElementsByTagName("label")[2].style.color = "red";
        document.getElementsByTagName("label")[3].style.color = "black";
        document.getElementsByTagName("label")[4].style.color = "black";
        document.getElementsByTagName("label")[5].style.color = "black";
        document.getElementById("nombre").style.borderColor = "red";
        document.getElementById("apellidop").style.borderColor = "red";
        document.getElementById("apellidom").style.borderColor = "red";
        document.getElementById("grupo").style.borderColor = "gray";
        document.getElementById("email").style.borderColor = "gray";
        document.getElementById("psswd").style.borderColor = "gray";
    } else if (nombre=='' && apellidop=='') {
        document.getElementsByTagName("label")[0].style.color = "red";
        document.getElementsByTagName("label")[1].style.color = "red";
        document.getElementsByTagName("label")[2].style.color = "black";
        document.getElementsByTagName("label")[3].style.color = "black";
        document.getElementsByTagName("label")[4].style.color = "black";
        document.getElementsByTagName("label")[5].style.color = "black";
        document.getElementById("nombre").style.borderColor = "red";
        document.getElementById("apellidop").style.borderColor = "red";
        document.getElementById("apellidom").style.borderColor = "gray";
        document.getElementById("grupo").style.borderColor = "gray";
        document.getElementById("email").style.borderColor = "gray";
        document.getElementById("psswd").style.borderColor = "gray";
    } else if (nombre=='') {
        document.getElementsByTagName("label")[0].style.color = "red";
        document.getElementsByTagName("label")[1].style.color = "black";
        document.getElementsByTagName("label")[2].style.color = "black";
        document.getElementsByTagName("label")[3].style.color = "black";
        document.getElementsByTagName("label")[4].style.color = "black";
        document.getElementsByTagName("label")[5].style.color = "black";
        document.getElementById("nombre").style.borderColor = "red";
        document.getElementById("apellidop").style.borderColor = "gray";
        document.getElementById("apellidom").style.borderColor = "gray";
        document.getElementById("grupo").style.borderColor = "gray";
        document.getElementById("email").style.borderColor = "gray";
        document.getElementById("psswd").style.borderColor = "gray";
    } else if (apellidop=='' && apellidom=='' && grupo=='' && email=='' && password=='') {
        document.getElementsByTagName("label")[0].style.color = "black";
        document.getElementsByTagName("label")[1].style.color = "red";
        document.getElementsByTagName("label")[2].style.color = "red";
        document.getElementsByTagName("label")[3].style.color = "red";
        document.getElementsByTagName("label")[4].style.color = "red";
        document.getElementsByTagName("label")[5].style.color = "red";
        document.getElementById("nombre").style.borderColor = "gray";
        document.getElementById("apellidop").style.borderColor = "red";
        document.getElementById("apellidom").style.borderColor = "red";
        document.getElementById("grupo").style.borderColor = "red";
        document.getElementById("email").style.borderColor = "red";
        document.getElementById("psswd").style.borderColor = "red";
    } else if (apellidop=='' && apellidom=='' && grupo=='' && email=='') {
        document.getElementsByTagName("label")[0].style.color = "black";
        document.getElementsByTagName("label")[1].style.color = "red";
        document.getElementsByTagName("label")[2].style.color = "red";
        document.getElementsByTagName("label")[3].style.color = "red";
        document.getElementsByTagName("label")[4].style.color = "red";
        document.getElementsByTagName("label")[5].style.color = "black";
        document.getElementById("nombre").style.borderColor = "gray";
        document.getElementById("apellidop").style.borderColor = "red";
        document.getElementById("apellidom").style.borderColor = "red";
        document.getElementById("grupo").style.borderColor = "red";
        document.getElementById("email").style.borderColor = "red";
        document.getElementById("psswd").style.borderColor = "gray";
    } else if (apellidop=='' && apellidom=='' && grupo=='') {
        document.getElementsByTagName("label")[0].style.color = "black";
        document.getElementsByTagName("label")[1].style.color = "red";
        document.getElementsByTagName("label")[2].style.color = "red";
        document.getElementsByTagName("label")[3].style.color = "red";
        document.getElementsByTagName("label")[4].style.color = "black";
        document.getElementsByTagName("label")[5].style.color = "black";
        document.getElementById("nombre").style.borderColor = "gray";
        document.getElementById("apellidop").style.borderColor = "red";
        document.getElementById("apellidom").style.borderColor = "red";
        document.getElementById("grupo").style.borderColor = "red";
        document.getElementById("email").style.borderColor = "gray";
        document.getElementById("psswd").style.borderColor = "gray";
    } else if (apellidop=='' && apellidom=='') {
        document.getElementsByTagName("label")[0].style.color = "black";
        document.getElementsByTagName("label")[1].style.color = "red";
        document.getElementsByTagName("label")[2].style.color = "red";
        document.getElementsByTagName("label")[3].style.color = "black";
        document.getElementsByTagName("label")[4].style.color = "black";
        document.getElementsByTagName("label")[5].style.color = "black";
        document.getElementById("nombre").style.borderColor = "gray";
        document.getElementById("apellidop").style.borderColor = "red";
        document.getElementById("apellidom").style.borderColor = "red";
        document.getElementById("grupo").style.borderColor = "gray";
        document.getElementById("email").style.borderColor = "gray";
        document.getElementById("psswd").style.borderColor = "gray";
    } else if (apellidop=='') {
        document.getElementsByTagName("label")[0].style.color = "black";
        document.getElementsByTagName("label")[1].style.color = "red";
        document.getElementsByTagName("label")[2].style.color = "black";
        document.getElementsByTagName("label")[3].style.color = "black";
        document.getElementsByTagName("label")[4].style.color = "black";
        document.getElementsByTagName("label")[5].style.color = "black";
        document.getElementById("nombre").style.borderColor = "gray";
        document.getElementById("apellidop").style.borderColor = "red";
        document.getElementById("apellidom").style.borderColor = "gray";
        document.getElementById("grupo").style.borderColor = "gray";
        document.getElementById("email").style.borderColor = "gray";
        document.getElementById("psswd").style.borderColor = "gray";
    } else if (apellidom=='' && grupo=='' && email=='' && password=='') {
        document.getElementsByTagName("label")[0].style.color = "black";
        document.getElementsByTagName("label")[1].style.color = "black";
        document.getElementsByTagName("label")[2].style.color = "red";
        document.getElementsByTagName("label")[3].style.color = "red";
        document.getElementsByTagName("label")[4].style.color = "red";
        document.getElementsByTagName("label")[5].style.color = "red";
        document.getElementById("nombre").style.borderColor = "gray";
        document.getElementById("apellidop").style.borderColor = "gray";
        document.getElementById("apellidom").style.borderColor = "red";
        document.getElementById("grupo").style.borderColor = "red";
        document.getElementById("email").style.borderColor = "red";
        document.getElementById("psswd").style.borderColor = "red";
    } else if (apellidom=='' && grupo=='' && email=='') {
        document.getElementsByTagName("label")[0].style.color = "black";
        document.getElementsByTagName("label")[1].style.color = "black";
        document.getElementsByTagName("label")[2].style.color = "red";
        document.getElementsByTagName("label")[3].style.color = "red";
        document.getElementsByTagName("label")[4].style.color = "red";
        document.getElementsByTagName("label")[5].style.color = "black";
        document.getElementById("nombre").style.borderColor = "gray";
        document.getElementById("apellidop").style.borderColor = "gray";
        document.getElementById("apellidom").style.borderColor = "red";
        document.getElementById("grupo").style.borderColor = "red";
        document.getElementById("email").style.borderColor = "red";
        document.getElementById("psswd").style.borderColor = "gray";
    } else if (apellidom=='' && grupo=='') {
        document.getElementsByTagName("label")[0].style.color = "black";
        document.getElementsByTagName("label")[1].style.color = "black";
        document.getElementsByTagName("label")[2].style.color = "red";
        document.getElementsByTagName("label")[3].style.color = "red";
        document.getElementsByTagName("label")[4].style.color = "black";
        document.getElementsByTagName("label")[5].style.color = "black";
        document.getElementById("nombre").style.borderColor = "gray";
        document.getElementById("apellidop").style.borderColor = "gray";
        document.getElementById("apellidom").style.borderColor = "red";
        document.getElementById("grupo").style.borderColor = "red";
        document.getElementById("email").style.borderColor = "gray";
        document.getElementById("psswd").style.borderColor = "gray";
    } else if (apellidom=='') {
        document.getElementsByTagName("label")[0].style.color = "black";
        document.getElementsByTagName("label")[1].style.color = "black";
        document.getElementsByTagName("label")[2].style.color = "red";
        document.getElementsByTagName("label")[3].style.color = "black";
        document.getElementsByTagName("label")[4].style.color = "black";
        document.getElementsByTagName("label")[5].style.color = "black";
        document.getElementById("nombre").style.borderColor = "gray";
        document.getElementById("apellidop").style.borderColor = "gray";
        document.getElementById("apellidom").style.borderColor = "red";
        document.getElementById("grupo").style.borderColor = "gray";
        document.getElementById("email").style.borderColor = "gray";
        document.getElementById("psswd").style.borderColor = "gray";
    } else if (grupo=='' && email=='' && password=='') {
        document.getElementsByTagName("label")[0].style.color = "black";
        document.getElementsByTagName("label")[1].style.color = "black";
        document.getElementsByTagName("label")[2].style.color = "black";
        document.getElementsByTagName("label")[3].style.color = "red";
        document.getElementsByTagName("label")[4].style.color = "red";
        document.getElementsByTagName("label")[5].style.color = "red";
        document.getElementById("nombre").style.borderColor = "gray";
        document.getElementById("apellidop").style.borderColor = "gray";
        document.getElementById("apellidom").style.borderColor = "gray";
        document.getElementById("grupo").style.borderColor = "red";
        document.getElementById("email").style.borderColor = "red";
        document.getElementById("psswd").style.borderColor = "red";
    } else if (grupo=='' && email=='') {
        document.getElementsByTagName("label")[0].style.color = "black";
        document.getElementsByTagName("label")[1].style.color = "black";
        document.getElementsByTagName("label")[2].style.color = "black";
        document.getElementsByTagName("label")[3].style.color = "red";
        document.getElementsByTagName("label")[4].style.color = "red";
        document.getElementsByTagName("label")[5].style.color = "black";
        document.getElementById("nombre").style.borderColor = "gray";
        document.getElementById("apellidop").style.borderColor = "gray";
        document.getElementById("apellidom").style.borderColor = "gray";
        document.getElementById("grupo").style.borderColor = "red";
        document.getElementById("email").style.borderColor = "red";
        document.getElementById("psswd").style.borderColor = "gray";
    } else if (grupo=='') {
        document.getElementsByTagName("label")[0].style.color = "black";
        document.getElementsByTagName("label")[1].style.color = "black";
        document.getElementsByTagName("label")[2].style.color = "black";
        document.getElementsByTagName("label")[3].style.color = "red";
        document.getElementsByTagName("label")[4].style.color = "black";
        document.getElementsByTagName("label")[5].style.color = "black";
        document.getElementById("nombre").style.borderColor = "gray";
        document.getElementById("apellidop").style.borderColor = "gray";
        document.getElementById("apellidom").style.borderColor = "gray";
        document.getElementById("grupo").style.borderColor = "red";
        document.getElementById("email").style.borderColor = "gray";
        document.getElementById("psswd").style.borderColor = "gray";
    } else if (email=='' && password=='') {
        document.getElementsByTagName("label")[0].style.color = "black";
        document.getElementsByTagName("label")[1].style.color = "black";
        document.getElementsByTagName("label")[2].style.color = "black";
        document.getElementsByTagName("label")[3].style.color = "black";
        document.getElementsByTagName("label")[4].style.color = "red";
        document.getElementsByTagName("label")[5].style.color = "red";
        document.getElementById("nombre").style.borderColor = "gray";
        document.getElementById("apellidop").style.borderColor = "gray";
        document.getElementById("apellidom").style.borderColor = "gray";
        document.getElementById("grupo").style.borderColor = "gray";
        document.getElementById("email").style.borderColor = "red";
        document.getElementById("psswd").style.borderColor = "red";
    } else if (email=='') {
        document.getElementsByTagName("label")[0].style.color = "black";
        document.getElementsByTagName("label")[1].style.color = "black";
        document.getElementsByTagName("label")[2].style.color = "black";
        document.getElementsByTagName("label")[3].style.color = "black";
        document.getElementsByTagName("label")[4].style.color = "red";
        document.getElementsByTagName("label")[5].style.color = "black";
        document.getElementById("nombre").style.borderColor = "gray";
        document.getElementById("apellidop").style.borderColor = "gray";
        document.getElementById("apellidom").style.borderColor = "gray";
        document.getElementById("grupo").style.borderColor = "gray";
        document.getElementById("email").style.borderColor = "red";
        document.getElementById("psswd").style.borderColor = "gray";
    } else if (password=='') {
        document.getElementsByTagName("label")[0].style.color = "black";
        document.getElementsByTagName("label")[1].style.color = "black";
        document.getElementsByTagName("label")[2].style.color = "black";
        document.getElementsByTagName("label")[3].style.color = "black";
        document.getElementsByTagName("label")[4].style.color = "black";
        document.getElementsByTagName("label")[5].style.color = "red";
        document.getElementById("nombre").style.borderColor = "gray";
        document.getElementById("apellidop").style.borderColor = "gray";
        document.getElementById("apellidom").style.borderColor = "gray";
        document.getElementById("grupo").style.borderColor = "gray";
        document.getElementById("email").style.borderColor = "gray";
        document.getElementById("psswd").style.borderColor = "red";
    } else{
        return true;
    }
    return false;

} */