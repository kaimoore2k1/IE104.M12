<?php
    $host = "localhost";
    $host_user ="root";
    $host_password = "";
    $database = "ie104.m12";
    // $port = "8111";

    $conn = new mysqli($host, $host_user, $host_password, $database);
    // $conn = new mysqli($host, $host_user, $host_password, $database, $port);
    if(!$conn)
            {
                die ("Kết nối thất bại" . $conn->connect_error);
            }
?>