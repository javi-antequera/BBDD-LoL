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
    <h2>El usuario <?php echo $name?> ha sido introducido en el sistema con la contraseña <?php echo $pas?></h2>
</body>
</html>