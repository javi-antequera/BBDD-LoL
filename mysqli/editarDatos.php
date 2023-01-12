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
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $rol = $_POST["rol"];
        $diff = $_POST["diff"];
        $desc = $_POST["desc"];

      $sql = "UPDATE champ SET name='$nombre', rol='$rol',difficulty='$diff', `description` ='$desc' WHERE id='$id'";
      $result = mysqli_query($conn,$sql);

        
      //echo '<script language="javascript">alert("Campeón modificado correctamente");</script>';
      header("Location: 002campeones.php");        
      //echo "<a class='btn btn-primary' href='002campeones.php'>Volver al listado</a>";

    ?>