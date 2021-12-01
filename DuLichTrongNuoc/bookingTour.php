<?php
    require "../connect.php"; 
    $id_tour = $_GET['id'];
    $name = $_POST['bookTourInfor__cus--name'];
    $phonenum = $_POST['bookTourInfor__cus--phonenum'];
    $email = $_POST['bookTourInfor__cus--email'];
    
    $sql = "INSERT INTO booking_form(Booking_Form_Id, CT_Tour_Id, Name, Phone_Number, Email) 
            VALUES ('','$id_tour','$name','$phonenum','$email')";
    $conn->query($sql);
    echo $sql;
    $goback = "location: DuLichTrongNuoc__ChiTiet.php?id=".$id_tour;
    header($goback);
?>