<?php
    $host = "localhost";
    $host_user ="root";
    $host_password = "";
    $database = "ie104.m12";
    $port = "8111";

    $conn = new mysqli($host, $host_user, $host_password, $database, $port);
    if(!$conn)
    {
        die ("Kết nối thất bại" . $conn->connect_error);
    }

    if(isset($_REQUEST["id"]) and $_REQUEST['id']!="")
    {
        $delete =  $_GET["id"];
        $sql = "DELETE FROM evaluate WHERE Evaluate_Id = $delete";
        $conn->query($sql);
        header("Location:QuanLyComment.php");
    }
    
?>