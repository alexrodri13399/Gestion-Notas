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
    
    require_once "../modelo/alumnoDAO.php";
    require_once "../modelo/notaDAO.php";
    $alumnodao = new AlumnoDao();
    $alumno = $alumnodao->lecturamodi($_GET['id_alumno']);
    $notadao = new NotaDao();
    $notas = $notadao->notas();

    if(isset($_POST['nota0'])) {
      $modificardao = new NotaDao();
      $modificar = $modificardao->modificar();
    }
  


    ?>
<h2 style="text-align: center;">Añadir Alumno</h2>
<div class="row">
    <div class="form">
      <form action="modificar_alumno.php" method="POST" onsubmit="return validacionForm1()">
        <input type="hidden" name="id_alumno" id="id_alumno" value="<?php echo $_GET['id_alumno'];?>"><br>
        <label>Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" value="<?php echo $alumno['nombre_alumno'];?>" disabled><br>
        <label>1r apellido:</label><br>
        <input type="text" name="apellidop" id="apellidop" value="<?php echo $alumno['apellidop_alumno'];?>" disabled><br>
        <label>2nd apellido:</label><br>
        <input type="text" name="apellidom" id="apellidom" value="<?php echo $alumno['apellidom_alumno'];?>" disabled><br>
        <label>Grupo:</label><br>
        <input type="text" name="grupo" id="grupo" value="<?php echo $alumno['grupo_alumno'];?>" disabled><br>
        <label>Email:</label><br>
        <input type="email" name="email" id="email" value="<?php echo $alumno['email_alumno'];?>" disabled><br>
        <?php
        $i=0;
        $sumanotas=0;
        foreach ($notas as $nota) {
          $sumanotas+=$nota['nota'];
          echo "<label>".$nota['nom_asignatura_nota']."</label><br>";
          echo "<input type='text' name='nota".$i."' id='nota' value='".$nota['nota']."' required><br>";
          $i++;
          }
          $notamedia=round($sumanotas/$i);
          echo "<label>Nota Media</label><br>";
          echo "<input type='text' value='".$notamedia."' disabled><br>";
         ?>
        <input type="submit" value="Submit">
      </form> 
    </div>
</div>
  
</body>
</html>