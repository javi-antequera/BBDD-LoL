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
        $order = $_GET["order"] ?? "";

        if($order=="ASC"){
            $consulta="SELECT * FROM champ ORDER BY name ASC;";
        }else if($order=="DESC"){
            $consulta="SELECT * FROM champ ORDER BY name DESC;";
        }else{
            $consulta="SELECT * FROM champ;";
        }

        $listachamp = mysqli_query($conn, $consulta);

        echo "<div class='table-responsive-md'>
            <table class='table table-primary'>
                <thead>
                    <tr>    
                        <th scope='col'>ID</th>
                        <th scope='col'</th>Nombre <br>
                            <a href='003campeones.php?order=ASC'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-down' viewBox='0 0 16 16'>
                                <path fill-rule='evenodd' d='M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z'/>
                                </svg>
                            </a>
                            <a href='003campeones.php?order=DESC'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-up' viewBox='0 0 16 16'>
                                <path fill-rule='evenodd' d='M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z'/>
                                </svg>
                            </a>
                        </th>
                        <th scope='col'>Rol</th>
                        <th scope='col'>Dificutad</th>
                        <th scope='col'>Descripcion</th>
                    </tr>
                </thead>
                <tbody>";
        
        foreach($listachamp as $campeon){
            echo "<tr>";
            echo "<td> $campeon[id]</td>";
            echo "<td>$campeon[name] </td>";
            echo "<td> $campeon[rol]</td>";
            echo "<td> $campeon[difficulty]</td>";
            echo "<td> $campeon[description]</td>";
            echo "</tr>";
        }
        echo "</tbody> </table> </div>";
?>