<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <script  src="code.js"></script>
</head>
<body>

<h2>Login Administrador</h2>

<form action="loginController.php" method="POST" onsubmit="return validacionForm()">
  <label>Email:</label><br>
  <input type="email" name="email" id="email"><br>
  <label>Contraseña:</label><br>
  <input type="password" name="psswd" id="psswd"><br>
  <input type="submit" value="Submit">
  <div id="message" style="color:red;"></div>
</form> 

</body>
</html>