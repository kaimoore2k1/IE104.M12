<?php
    session_start();
    if (isset($_SESSION['FullName']) && $_SESSION['FullName']){
        $adminName = $_SESSION['FullName'];
    }
    else {
        header("location:DangNhap.php");
    }
?>