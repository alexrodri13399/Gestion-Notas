<?php
require_once 'admin.php';
class AdminDao{
    private $pdo;

    public function __construct(){
        include '../controlador/conexion.php';
        $this->pdo=$pdo;
    }

    public function login($admin){
        $query = "SELECT * FROM tbl_administrador WHERE email_administrador	=? AND passwd_administrador=?";
        $sentencia=$this->pdo->prepare($query);
        $email=$admin->getEmail();
        $psswd=$admin->getPassword();
        $sentencia->bindParam(1,$email);
        $sentencia->bindParam(2,$psswd);
        $sentencia->execute();
        
       // $result=$sentencia->fetch(PDO::FETCH_ASSOC);
        $numRow=$sentencia->rowCount();
        if( $numRow==1){
            
            // creamos la sesion
            session_start();
            $_SESSION['admin']=$admin;

            return true;
        }else {
            echo "<script>alert('error aqui')</script>";
            return false;
        }
    }
}

?>