<?php
    require "../connect.php";
    session_start();
    $user_Id = $_SESSION['ID'];
    $get_idTour = $_GET['id'];
    $cmt_content = htmlentities($_POST['comment_content']);
    $sql = "INSERT INTO evaluate(Evaluate_Id, User_Id, CT_Tour_Id, CT_Hotel_Id, Content, Rating, Time) 
            VALUES ('auto','$user_Id','$get_idTour',NULL,'$cmt_content','5',now())";
    $conn->query($sql);

    $goback = "location:DuLichTrongNuoc__ChiTiet.php?id=".$get_idTour;
    header("$goback");
?>