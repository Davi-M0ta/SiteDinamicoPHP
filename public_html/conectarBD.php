<?php
    $servername = "localhost";

    //$username = "root";
    $username = "id17469689_davidamota";

    //$password = "";
    $password = "p5?-vR2[\Ka\Xws]";

    //$db = "sitedinamicobd"; // 
    $db = "id17469689_bancositeprog";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "<script>console.log('Connected successfully');</script>";
?>