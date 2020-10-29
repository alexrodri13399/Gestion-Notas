<?php

class Nota{
    public $id_nota;
    public $nom_asignatura_notas;
    public $nota;
    public $id_alumno;

    function __construct($id_nota,$nom_asignatura_notas,$nota,$id_alumno) {
        $this->id_nota=$id_nota;
        $this->nom_asignatura_notas=$nom_asignatura_notas;
        $this->nota=$nota;
        $this->id_alumno=$id_alumno;
    }

    public function getId_nota(){
        return $this->id_nota;
    }
    public function setId_nota($id_nota){
        $this->id_nota = $id_nota;
        return $this;
    }

    public function getNom_asignatura_notas(){
        return $this->nom_asignatura_notas;
    }
    public function setNom_asignatura_notas($nom_asignatura_notas){
        $this->nom_asignatura_notas = $nom_asignatura_notas;
        return $this;
    }

    public function getNota(){
        return $this->nota;
    }
    public function setNota($nota){
        $this->nota = $nota;
        return $this;
    }

    public function getId_alumno(){
        return $this->id_alumno;
    }
    public function setId_alumno($id_alumno){
        $this->id_alumno = $id_alumno;
        return $this;
    }


}

?>