<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/styles.css">
  <link href="../css/fontawesome-free-5.15.0-web/css/all.css" rel="stylesheet">
  <script  src="../js/code.js"></script>
</head>
<body>
<h2 style="text-align: center;">Login Administrador</h2>
<div class="row">
    <div class="form">
      <form action="../controlador/loginController.php" method="POST" onsubmit="return validacionForm()">
        <label>Email:</label><br>
        <input type="email" name="email" id="email"><br>
        <label>Contraseña:</label><br>
        <input type="password" name="psswd" id="psswd"><br>
        <input type="submit" value="Submit">
      </form> 
    </div>
</div>
  
</body>
</html>