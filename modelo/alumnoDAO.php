<?php
require_once 'alumno.php';
class AlumnoDao{
    private $pdo;

    public function __construct(){
        require_once '../controlador/conexion.php';
        $this->pdo=$pdo;
    }

    public function read(){
        $query = "SELECT * FROM tbl_alumno;";
        $sentencia=$this->pdo->prepare($query);
        $sentencia->execute();
        $lista_alumno=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        echo "<table>";
        echo "<tr>";
        echo "<th></th>";
        echo "<th>Nombre</th>";
        echo "<th>1r Apellido</th>";
        echo "<th>2n Apellido</th>";
        echo "</tr>";
        foreach($lista_alumno as $alumno) {
        $id=$alumno['id_alumno'];
        echo "<tr>";
        echo "<td><a href='modificar_alumno.php?id_alumno=$id'>Modificar</a> <a href='zona.admin.php?id_alumno=$id'>Eliminar</a></td>";
        echo "<td>{$alumno['nombre_alumno']}</td>";
        echo "<td>{$alumno['apellidop_alumno']}</td>";
        echo "<td>{$alumno['apellidom_alumno']}</td>";
        echo "</tr>";
        }
        echo "</table>";
    }

    public function filtros(){
        $nombre=$_POST['nombre'];
        $apellidop=$_POST['apellidop'];
        $query = "SELECT * FROM tbl_alumno WHERE nombre_alumno LIKE '%$nombre%' AND apellidop_alumno LIKE '%$apellidop%';";
        $sentencia=$this->pdo->prepare($query);
        $sentencia->execute();
        $lista_alumno=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        echo "<table>";
        echo "<tr>";
        echo "<th></th>";
        echo "<th>Nombre</th>";
        echo "<th>1r Apellido</th>";
        echo "<th>2n Apellido</th>";
        echo "</tr>";
        foreach($lista_alumno as $alumno) {
        $id=$alumno['id_alumno'];
        echo "<tr>";
        echo "<td><a href='modificar_alumno.php?id_alumno=$id'>Modificar</a> <a href='zona.admin.php?id_alumno=$id'>Eliminar</a></td>";
        echo "<td>{$alumno['nombre_alumno']}</td>";
        echo "<td>{$alumno['apellidop_alumno']}</td>";
        echo "<td>{$alumno['apellidom_alumno']}</td>";
        echo "</tr>";
        }
        echo "</table>";
    }

    public function insert($alumno){
        try {
            $this->pdo->beginTransaction(); 
            $query = "INSERT INTO `tbl_alumno` (`nombre_alumno`, `apellidop_alumno`, `apellidom_alumno`, `grupo_alumno`, `email_alumno`, `passwd_alumno`) VALUES (?,?,?,?,?,?);";
            $sentencia=$this->pdo->prepare($query);
            $nombre=$alumno->getNombre_alumno();
            $apellidop=$alumno->getApellidop_alumno();
            $apellidom=$alumno->getApellidom_alumno();
            $grupo=$alumno->getGrupo_alumno();
            $email=$alumno->getEmail();
            $psswd=$alumno->getPassword();
            $sentencia->bindParam(1,$nombre);
            $sentencia->bindParam(2,$apellidop);
            $sentencia->bindParam(3,$apellidom);
            $sentencia->bindParam(4,$grupo);
            $sentencia->bindParam(5,$email);
            $sentencia->bindParam(6,$psswd);
            $sentencia->execute();
            $this->pdo->commit();
        } catch (Exception $ex) {
            $this->pdo->rollback();
            echo $ex->getMessage();
            }
    }

    public function eliminar(){
        try {
            $this->pdo->beginTransaction();
            $query = "SELECT * FROM `tbl_nota` WHERE `id_alumno` = ?";
            $sentencia=$this->pdo->prepare($query);
            $id=$_GET['id_alumno'];
            $sentencia->bindParam(1,$id);
            $sentencia->execute();
            if (mysqli_num_rows(mysqli_query($query))>0) {
                $query = "DELETE FROM `tbl_nota` WHERE `id_alumno` = ?";
                $sentencia1=$this->pdo->prepare($query);
                $sentencia1->bindParam(1,$id);
                $sentencia1->execute();
                
                $query = "DELETE FROM `tbl_alumno` WHERE `id_alumno` = ?";
                $sentencia2=$this->pdo->prepare($query);
                $sentencia2->bindParam(1,$id);
                $sentencia2->execute();
            } else {
                $query = "DELETE FROM `tbl_alumno` WHERE `id_alumno` = ?";
                $sentencia1=$this->pdo->prepare($query);
                $sentencia1->bindParam(1,$id);
                $sentencia1->execute();
            }

            $this->pdo->commit();
            header('Location: ../vista/zona.admin.php');
        } catch (Exception $ex) {
            $this->pdo->rollback();
            echo $ex->getMessage();
            }
    }
}

?>