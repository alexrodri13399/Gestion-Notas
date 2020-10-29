<?php

require_once "persona.php";
class Admin extends Persona{
    //es private porque es un hijo

    function __construct($email,$password) {
        parent:: __construct($email,$password);
        //lo ponemos aqui porque no esta en el constructor de persona (padre) y como lo edera por la clase lo ponemos asi el DNI.
        
    }

}

?>