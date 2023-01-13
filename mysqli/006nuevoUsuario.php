<?php
$dsn='mysql:host=localhost;dbname=lol';
$usuario='root';
$password='';
try{
    $mdb = new PDO($dns, $usuario, $password);
    $mdb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo 'Falló la conexión:' . $e->getMessage();
}

$usu = $_POST["usuario"];
$pas = $_POST["password"];
$sql = "INSERT INTO user(id,name,username,password,email) VALUES (:id,:name,:username,:password,:email)";

$sentencia=""
?>