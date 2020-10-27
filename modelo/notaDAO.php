<?php
require_once 'nota.php';
class NotaDao{
    private $pdo;

    public function __construct(){
        include '../controlador/conexion.php';
        $this->pdo=$pdo;
    }

    public function notas(){
        $id=$_GET['id_alumno'];
        $query = "SELECT * FROM tbl_nota WHERE id_alumno=?";
        $sentencia=$this->pdo->prepare($query);
        $sentencia->bindParam(1,$id);
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
        
    }

    public function modificar(){
        try {
            $this->pdo->beginTransaction();
            $query = "UPDATE `tbl_nota` SET `nota` = ? WHERE `id_alumno` = ? AND nom_asignatura_nota LIKE 'Matemáticas';";
            $sentencia=$this->pdo->prepare($query);
            $nota=$_POST['nota0'];
            $id=$_POST['id_alumno'];
            $sentencia->bindParam(1,$nota);
            $sentencia->bindParam(2,$id);
            $sentencia->execute();
            $query1 = "UPDATE `tbl_nota` SET `nota` = ? WHERE `id_alumno` = ? AND nom_asignatura_nota LIKE 'Física';";
            $sentencia1=$this->pdo->prepare($query1);
            $nota=$_POST['nota1'];
            $id=$_POST['id_alumno'];
            $sentencia1->bindParam(1,$nota);
            $sentencia1->bindParam(2,$id);
            $sentencia1->execute();
            $query2 = "UPDATE `tbl_nota` SET `nota` = ? WHERE `id_alumno` = ? AND nom_asignatura_nota LIKE 'Programación';";
            $sentencia2=$this->pdo->prepare($query2);
            $nota=$_POST['nota2'];
            $id=$_POST['id_alumno'];
            $sentencia2->bindParam(1,$nota);
            $sentencia2->bindParam(2,$id);
            $sentencia2->execute();
            print_r($sentencia2);
            $this->pdo->commit();
            header('Location: ../vista/zona.admin.php');
        } catch (Exception $ex) {
            $this->pdo->rollback();
            echo $ex->getMessage();
            }
    }

    public function medias(){
        //Media de mates.
        $query = "SELECT avg(nota) as nota FROM `tbl_nota` WHERE nom_asignatura_nota='Matemáticas';";
        $sentencia=$this->pdo->prepare($query);
        $sentencia->execute();
        $medias1=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        foreach($medias1 as $media1) {
            echo "Nota media de Matemáticas: ".round($media1['nota'],2);
        }

        //Media de fisica.
        $query = "SELECT avg(nota) as nota FROM `tbl_nota` WHERE nom_asignatura_nota='Física';";
        $sentencia=$this->pdo->prepare($query);
        $sentencia->execute();
        $medias2=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        foreach($medias2 as $media2) {
            echo "Nota media de Física: ".round($media2['nota'],2);
        }

        //Media de programacion.
        $query = "SELECT avg(nota) as nota FROM `tbl_nota` WHERE nom_asignatura_nota='Programación';";
        $sentencia=$this->pdo->prepare($query);
        $sentencia->execute();
        $medias3=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        foreach($medias3 as $media3) {
            echo "Nota media de Programación: ".round($media3['nota'],2);
        }

        //Mejor media.
        $mates=round($media1['nota'],2);
        $fisica=round($media2['nota'],2);
        $programacion=round($media3['nota'],2);
        echo "</br>";
        if (($mates>$fisica)&&($mates>$programacion)){
            echo "La materia con mayor nota media es Matemáticas.";
        } elseif (($fisica>$mates)&&($fisica>$programacion)) {
            echo "La materia con mayor nota media es Física.";
        } else {
            echo "La materia con mayor nota media es Programación.";
        }

        //Alumno con mejor nota de matemáticas.
        echo "</br>";
        $query = "SELECT tbl_nota.nota, tbl_alumno.nombre_alumno, tbl_alumno.apellidop_alumno, 
        tbl_alumno.apellidom_alumno FROM `tbl_nota` INNER JOIN tbl_alumno ON tbl_alumno.id_alumno=tbl_nota.id_alumno 
        WHERE tbl_nota.nom_asignatura_nota='Matemáticas' order by tbl_nota.nota DESC";
        $sentencia=$this->pdo->prepare($query);
        $sentencia->execute();
        $result=$sentencia->fetch(PDO::FETCH_ASSOC);
        echo "La mejor nota de Matemáticas es de ".$result['nombre_alumno']." ".$result['apellidop_alumno']." 
        ".$result['apellidom_alumno']." con un ".$result['nota'];

        //Alumno con mejor nota de física.
        echo "</br>";
        $query = "SELECT tbl_nota.nota, tbl_alumno.nombre_alumno, tbl_alumno.apellidop_alumno, 
        tbl_alumno.apellidom_alumno FROM `tbl_nota` INNER JOIN tbl_alumno ON tbl_alumno.id_alumno=tbl_nota.id_alumno 
        WHERE tbl_nota.nom_asignatura_nota='Física' order by tbl_nota.nota DESC";
        $sentencia=$this->pdo->prepare($query);
        $sentencia->execute();
        $result=$sentencia->fetch(PDO::FETCH_ASSOC);
        echo "La mejor nota de Física es de ".$result['nombre_alumno']." ".$result['apellidop_alumno']." 
        ".$result['apellidom_alumno']." con un ".$result['nota'];

        //Alumno con mejor nota de programación.
        echo "</br>";
        $query = "SELECT tbl_nota.nota, tbl_alumno.nombre_alumno, tbl_alumno.apellidop_alumno, 
        tbl_alumno.apellidom_alumno FROM `tbl_nota` INNER JOIN tbl_alumno ON tbl_alumno.id_alumno=tbl_nota.id_alumno 
        WHERE tbl_nota.nom_asignatura_nota='Programación' order by tbl_nota.nota DESC";
        $sentencia=$this->pdo->prepare($query);
        $sentencia->execute();
        $result=$sentencia->fetch(PDO::FETCH_ASSOC);
        echo "La mejor nota de Programación es de ".$result['nombre_alumno']." ".$result['apellidop_alumno']." 
        ".$result['apellidom_alumno']." con un ".$result['nota'];
        
    }



}
?>