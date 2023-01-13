<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <?php 
        $name = $_GET["name"];
        $pas = $_GET["pas"];
    ?>
    <h1>¡Bienvenido de nuevo <?php echo $name?>!</h1>
    <h2>Tu usuario es<?php echo $name?> y tu contraseña <?php echo $pas?></h2>
</body>
</html>