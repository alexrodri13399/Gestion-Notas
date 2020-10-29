<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body {
            margin: 0;
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
<button onclick="location.href='zona.admin.php'">Volver</button>
</br></br>
<?php
//require_once '../modelo/alumnoDAO.php';
require_once '../modelo/notaDAO.php';



$notaDAO = new NotaDAO();
echo $notaDAO->medias();

?>
</div>

</body>
</html>