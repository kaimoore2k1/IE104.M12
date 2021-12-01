<?php
    require "../connect.php";
    $get_idTour = $_GET['id'];
    $sql = "SELECT * FROM TOUR, CT_TOUR WHERE TOUR.TOUR_ID = CT_TOUR.TOUR_ID AND TOUR.TOUR_ID = '$get_idTour'";
    $kq = $conn->query($sql);
    $check = $kq->fetch_assoc();
    if(!$check){
        echo "<script>
            alert('Sản phẩm đang được hoàn thiện, vui lòng trở lại sau!!!')
            window.location.href = '../DuLichTrongNuoc__Tour/DuLichTrongNuoc__Tour.php'
        </script>";
        /* header("location:../DuLichTrongNuoc__Tour/DuLichTrongNuoc__Tour.php"); */
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="DuLichTrongNuoc__PDF.css">
    <title>Document</title>
</head>
<body>
    <?php echo $check['CT_Tour_PDF']; ?>
</body>
</html>