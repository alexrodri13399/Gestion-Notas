<?php

require_once 'persona.php';
class Alumno extends Persona{
    //es private porque es un hijo
    private $nombre_alumno;
    private $apellidop_alumno;
    private $apellidom_alumno;
    private $grupo_alumno;

    function __construct($nombre_alumno,$apellidop_alumno,$apellidom_alumno,$grupo_alumno,$email,$password) {
        parent:: __construct($email,$password);
        //lo ponemos aqui porque no esta en el constructor de persona (padre) y como lo edera por la clase lo ponemos asi el DNI.
        $this->nombre_alumno=$nombre_alumno;
        $this->apellidop_alumno=$apellidop_alumno;
        $this->apellidom_alumno=$apellidom_alumno;
        $this->grupo_alumno=$grupo_alumno;
    }

    //Getters and setters

    public function getNombre_alumno(){
        return $this->nombre_alumno;
    }
    public function setNombre_alumno($nombre_alumno){
        $this->nombre_alumno = $nombre_alumno;
        return $this;
    }

    public function getApellidop_alumno(){
        return $this->apellidop_alumno;
    }
    public function setApellidop_alumno($apellidop_alumno){
        $this->apellidop_alumno = $apellidop_alumno;
        return $this;
    }

    public function getApellidom_alumno(){
        return $this->apellidom_alumno;
    }
    public function setApellidom_alumno($apellidom_alumno){
        $this->apellidom_alumno = $apellidom_alumno;
        return $this;
    }

    public function getGrupo_alumno(){
        return $this->grupo_alumno;
    }
    public function setGrupo_alumno($grupo_alumno){
        $this->grupo_alumno = $grupo_alumno;
        return $this;
    }
    
}

?>