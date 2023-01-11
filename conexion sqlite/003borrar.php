<?php 
    $servername = "localhost";
    $database = "lol";
    $username = "root";
    $password = "";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        echo("Connection failed: " . mysqli_connect_error());
        exit();
    }
        $id = $_GET["id"];

        $sql = "DELETE FROM champ WHERE id=$id";
        $result = mysqli_query($conn,$sql);

        //echo '<script language="javascript">alert("Campeón eliminado correctamente");</script>';
        header("Location: 002campeones.php");          
        //echo "<a class='btn btn-primary' href='002campeones.php'>Volver al listado</a>";
?>