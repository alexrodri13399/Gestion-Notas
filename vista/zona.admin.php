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
            text-align: center;
            /*margin-left: 20px;*/
            /*float: left;*/
        }

        td, th {
            border: 1px solid #dddddd;
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

        .bloque {
            text-align: -webkit-center;
        }

    </style>
</head>
<body>

<?php
require_once '../controlador/sessionController.php';
?>
<div class="bloque">
</br></br>
<button onclick="location.href='añadir_alumno.php'">Añadir Alumno</button>
<button onclick="location.href='estadisticas_notas.php'">Estadísticas Notas</button>
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
require_once '../modelo/notaDAO.php';
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
</div>

</body>
</html>