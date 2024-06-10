<?php
    $servername = "localhost:3308";
    $username = "root";
    $password = "";
    $dbname = "latihan_crud";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection Failed : " . $conn->connect_error);
    }
?>