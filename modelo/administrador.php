<?php

class Administrador extends Persona{
    //es private porque es un hijo

    function __construct($id,$email,$password) {
        parent:: __construct($id,$email,$password);
        //lo ponemos aqui porque no esta en el constructor de persona (padre) y como lo edera por la clase lo ponemos asi el DNI.
        
    }

}

?>