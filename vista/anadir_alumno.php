<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/styles.css">
  <link href="../css/fontawesome-free-5.15.0-web/css/all.css" rel="stylesheet">
  <script  src="../js/code.js"></script>
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
    if(isset($_POST['nombre'])) {
        require_once '../modelo/alumnoDAO.php';
        $alumno = new Alumno($_POST['nombre'], $_POST['apellidop'], $_POST['apellidom'], $_POST['grupo'], $_POST['email'], $_POST['psswd']);
        $alumnoDAO = new AlumnoDAO();
        if ($alumnoDAO->insert($alumno)) {
            header('Location: zona.admin.php');
        } else {
            header('Location: zona.admin.php');
            }
    }

    ?>
<h2 style="text-align: center;">Añadir Alumno</h2>
<div class="row">
    <div class="form">
      <form action="anadir_alumno.php" method="POST" onsubmit="return validacionForm1()">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" required><br>
        <label>1r apellido:</label><br>
        <input type="text" name="apellidop" id="apellidop" required><br>
        <label>2nd apellido:</label><br>
        <input type="text" name="apellidom" id="apellidom" required><br>
        <label>Grupo:</label><br>
        <input type="text" name="grupo" id="grupo" required><br>
        <label>Email:</label><br>
        <input type="email" name="email" id="email" required><br>
        <label>Contraseña:</label><br>
        <input type="password" name="psswd" id="psswd" required><br>
        <input type="submit" value="Enviar">
        <button onclick="location.href='zona.admin.php'">Volver</button>
      </form> 
    </div>
</div>
  
</body>
</html>