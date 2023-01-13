<?php 
  $fallo = $_GET["fallo"] ?? "";
  if ($fallo == "usuario") {
  echo "<script>alert('Este usuario no existe, prueba a registrarte');</script>";
} else if ($fallo == "pass") {
  echo "<script>alert('Contraseña incorrecta, prueba de nuevo');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/custom.css">
    <script defer src="../js/custom.js"></script>
</head>
<body>
<div class="login-box">
  <h2>Login</h2>
  <form action="006usuarioExistente.php" method="post">
    <div class="user-box">
      <input type="text" name="usuario" required="">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required=""> 
      <label>Password</label>
    </div>
    
    <input type="submit"><br>

    <a href="005registro.php" >
    <span></span>
      <span></span>
      <span></span>
      <span></span>
      Registrarse</a>
  </form>
</div>
</body>
</html>