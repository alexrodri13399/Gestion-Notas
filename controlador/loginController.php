<?php
require_once '../modelo/admin.php';
require_once '../modelo/adminDAO.php';

$admin = new Admin($_POST['email'], $_POST['psswd']);
$adminDAO = new AdminDAO();
if($adminDAO->login($admin)){
    header('Location: ../vista/zona.admin.php');
}else {
    header('Location: ../vista/login.php');
}
