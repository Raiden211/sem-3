<?php
    $servername = "localhost";
    $user = "root";
    $pass = "";
    $db = "nyoba";

    $conn = mysqli_connect($servername,$user,$pass,$db);
    if(!$conn)
    {
        die("Could not connect to database");
    }
    // echo ("Terkonek ke database");
?>