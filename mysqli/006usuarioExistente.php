<?php
$dsn='mysql:host=localhost;dbname=lol';
$usuario='root';
$password='';   
try{
    $mdb = new PDO($dsn, $usuario, $password);
    $mdb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $user = $_POST['usuario'];
    $contra = $_POST['password'];


    $datos = "SELECT * FROM user WHERE username = ?";
    $query = $mdb->prepare($datos);
    $query->execute([$user]);
    $usuario = $query->fetch();

    if (!$usuario) {
        header("Location: 005login.php?fallo=usuario");
    } else if ($usuario && !password_verify($contra, $usuario['password'])) {
        header("Location: 005login.php?fallo=pass");
    } else if ($usuario && password_verify($contra, $usuario['password'])) {
        echo "    <h1>¡Bienvenido de nuevo ". $usuario['name'] ."!</h1>
        <h2>Tu usuario es ". $usuario['username'] ."  y tu contraseña ". $usuario['password'] ."</h2>";}

}catch(PDOException $e){
    echo 'Falló la conexión:' . $e->getMessage();
}
?>