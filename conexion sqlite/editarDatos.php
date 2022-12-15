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

        $result = mysqli_query($conn, "UPDATE `champ` SET `name`='$nombre',rol='$rol',difficulty='$diff',`description`='$desc' WHERE id='$id';");
        if ($conn->query($result) === TRUE) {
            header("002campeones.php");
          } else {
            echo "Error updating record: " . $conn->error;
          }

    ?>