<?php
require_once '../modelo/admin.php';
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location:../vista/login.php');
}
echo '<div class="logo"><h1>Bienvenido '.$_SESSION['admin']->getEmail().'</h1><h1 style="float: right;"><a href="../controlador/logoutController.php">Logout</a></h1></div>';