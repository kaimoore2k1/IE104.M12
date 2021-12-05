<?php
    require "../connect.php";

    if(isset($_REQUEST["id"]) and $_REQUEST['id']!="")
    {
        $delete =  $_GET["id"];
        $sql = "DELETE FROM user WHERE User_Id = $delete";
        $conn->query($sql);
        header("Location:QuanLyUser.php");
    }
    
?>