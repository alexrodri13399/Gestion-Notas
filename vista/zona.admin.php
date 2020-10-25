<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body {
            margin: 0;
        }
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 40%;
            margin-left: 20px;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        .logo {
            background-color: gray;
            color: white;
            padding: 5px;
            font-size: 10px;
            overflow: hidden;
        }

        .logo h1 {
            float: left;
            display: block;
        }

        .logo a {
            text-decoration: none;
            color: white;
        }

        a {
            text-decoration: none;
        }

        form {
            margin-left: 20px;
        }

    </style>
</head>
<body>
<?php
require_once '../controlador/sessionController.php';
?>
</br></br>
<button style="margin-left: 20px;" onclick="location.href='añadir_alumno.php'">Añadir Alumno</button>
</br></br>
<form action="zona.admin.php" method="POST">
  <label>Nombre:</label>
  <input type="text" id="nombre" name="nombre">
  <label>1r Apellido:</label>
  <input type="text" id="apellidop" name="apellidop">
  <input type="submit" value="Filtrar">
</form> 
</br>
<?php
require_once '../modelo/alumnoDAO.php';
if (isset($_GET['id_alumno'])){
    $alumnoDAO = new AlumnoDAO();
    $alumnoDAO->eliminar();
}
if (isset($_POST['nombre']) || isset($_POST['apellidop'])) {
    $alumnoDAO = new AlumnoDAO();
    echo $alumnoDAO->filtros();
} else {
    $alumnoDAO = new AlumnoDAO();
    echo $alumnoDAO->read();
}

?>
  
</body>
</html>