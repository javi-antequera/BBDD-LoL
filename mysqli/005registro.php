<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../css/custom.css">
    <script defer src="../js/register.js"></script>
</head>
<body>
<div class="login-box">
  <h2>Registro</h2>
  <form action="006nuevoUsuario.php" method="post">
    <div class="user-box">
      <input type="text" name="name" required="">
      <label>Name</label>
    </div>
    <div class="user-box">
      <input type="text" name="usuario" required="">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <label>Password</label>
    </div>
    <div class="user-box">
      <input type="text" name="email" required="">
      <label>Email</label>
    </div>
    <!-- <button>
      Submit
    </button type="submit"> -->
    <input type="submit"><a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Submit
    </a>
  </form>
</div>
</body>
</html>