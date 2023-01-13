<?php
$dsn='mysql:host=localhost;dbname=lol';
$usuario='root';
$password='';   
try{
    $mdb = new PDO($dsn, $usuario, $password);
    $mdb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $usu = $_POST["usuario"];
    $pas = $_POST["password"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    // if($usu==""||$pas==""||$name=""||$email=""){
    //     header("Location: 005registro.php");
    // }
    $sql = "INSERT INTO user(id,name,username,password,email) VALUES (:id,:name,:username,:password,:email)";

    $sentencia = $mdb->prepare($sql);
    $isOk = $sentencia->execute([
        "id" => 0,
        "name" => $name,
        "username" => $usu,
        "password" => password_hash($pas, PASSWORD_DEFAULT),
        "email" => $email
    ]);
    header("Location: 007nuevoUsuario.php?name=$name&pas=$pas");
}catch(PDOException $e){
    echo 'Falló la conexión:' . $e->getMessage();
}
?>