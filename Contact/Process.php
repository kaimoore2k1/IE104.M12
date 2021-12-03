<?php


    $fullname = $_POST["full-name"];
    $phonenumber = $_POST["phone-number"];
    $email = $_POST["email"];
    $topic = $_POST["topic"];
    $content = $_POST["content"];


    $hostname = "localhost";
    $username = "root";
    $password = "";
    $db = "ie104.m12";
    $port = "3306";


    $conn = new mysqli($hostname, $username, $password, $db, $port);

    if($conn->connect_error){
        die("Connection failed: " .$conn->connect_error);
    }
    echo "Connected successfully" . "<br>";

    $sql = "INSERT INTO contact (HoTen, SDT, Email, Topic, Content) VALUES ('$fullname', '$phonenumber', '$email', '$topic', '$content')";
    
    if($conn->query($sql) === TRUE){
        echo "New record created successfully";
    }else{
        echo "Error" . $sql . "<br>" . $conn->error;
    }


    $conn->close();

?>