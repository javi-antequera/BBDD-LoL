
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campeones</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script defer src="../js/bootstrap.bundle.js"></script>
</head>
<body>
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
            echo "$campeon[name] ---- $campeon[rol] <button><a href='003editando.php?id=$campeon[id]'>EDITAR</a></button>
            <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>Launch demo modal</button>
            <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel'>Modal title</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
                <div class='modal-body'>
                    ...
                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                    <button type='button' class='btn btn-primary'>Save changes</button>
                </div>
                </div>
            </div>
            </div>";
            echo "</li>";
        }
        echo "</ul>";
?>  
</body>
</html>
