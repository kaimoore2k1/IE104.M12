<?php
    require "../connect.php";

    if(isset($_REQUEST["id"]) and $_REQUEST['id']!="")
    {
        $delete =  $_GET["id"];
        $sql = "DELETE FROM blog WHERE Blog_Id = $delete";
        $conn->query($sql);
        header("Location:QuanLyBlog.php");
    }
    
?>