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
        //echo "Connected successfully";
        
        $consulta="SELECT * FROM champ;";
        $listachamp = mysqli_query($conn, $consulta);

        echo "<ul>";
        foreach($listachamp as $campeon){
            echo "<li>";
            echo "$campeon[name] ---- $campeon[rol] <button><a href='003editando.php?id=$campeon[id]'>EDITAR</a></button><button>BORRAR</button>";
            echo "</li>";
        }
        echo "</ul>";
?>