<?php
    header('Content-Type: text/html; charset=utf-8');
    //host info
    $host = 'localhost';
    $host_user = 'root';
    $host_password = '';
    $database = 'demo';
    //connect db
    $connect = mysqli_connect($host, $host_user, $host_password,$database) 
    //conect fail
        or die ('Lỗi kết nối'); 
    mysqli_set_charset($connect, "utf8");
    //get data from form

    if(isset($_POST['dangky'])){
        $last_name = $_POST['last-name'];
        $first_name = $_POST['first-name'];
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        //import data into db
        //
        $sql = "SELECT * 
                FROM tb_user 
                WHERE USERNAME = '$username' OR EMAIL='$email';
                ";
        $result = mysqli_query($connect,$sql);
    
        //check username already existed in db
        if(mysqli_num_rows($result) > 0){
            echo    '<script >
                        alert("Username hoặc Email đã bị trùng!"); 
                        window.location="sign-up.php";
                    </script>';
            die();
        }
        else {
            $sql = "INSERT INTO tb_user 
                        (USERNAME, 
                        PASSWORD, 
                        EMAIL, 
                        FIRSTNAME, 
                        LASTNAME,
                        STATUS) 
                    VALUES 
                        ('$username',
                        '$password',
                        '$email',
                        '$first_name',
                        '$last_name',
                        'ACTIVE')";
            mysqli_query($connect,$sql);
            echo '<script>
                alert("Bạn đã đăng ký thành công")
                window.location= "sign-up.php"
            </script>';
            
        };
        $connect->close();
        die();
    }
/*
                        _oo0oo_ 
                       o8888888o
                       88" . "88
                       (| -_- |)
                       0\  =  /0
                     ___/`---'\___
                   .' \|     |// '.
                  / \|||  :  |||// \
                 / _||||| -:- |||||- \
                |   | \\  -  /// |   |
                | \_|  ''\---/''  |_/ |
                \  .-\__  '-'  ___/-. /
              ___'. .'  /--.--\  `. .'___
           ."" '<  `.___\_<|>_/___.' >' "".
          | | :  `- \`.;`\ _ /`;.`/ - ` : | |
          \  \ `_.   \_ __\ /__ _/   .-` /  /
      =====`-.____`.___ \_____/___.-`___.-'=====
                        `=---='
*/ 
?>
