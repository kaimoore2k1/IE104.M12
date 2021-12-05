<?php 
    session_start(); 
    header('Content-Type: text/html; charset=utf-8');
    require "../connect.php";
    //host info
    // $host = 'localhost';
    // $host_user = 'root';
    // $host_password = '';
    // $db_name= 'ie104.m12';
    //connect db
    // $connect = mysqli_connect($host, $host_user, $host_password, $db_name) 
    //conect fail
        // or die ('Lỗi kết nối'); 

    mysqli_set_charset($conn, "utf8");

    if(isset($_POST['signInSubmit'])){
        $username = addslashes($_POST['accountName']);
        $password = addslashes($_POST['psw']);

  
        //check exist username in db
        $query = "SELECT * FROM user WHERE User_Name='$username';";

        $result = mysqli_query($conn, $query) or die( mysqli_error($conn));

        if (!$result) {
            echo "<script>
                alert('Tên đăng nhập hoặc mật khẩu không đúng!');
                window.location= 'sign-in.php'
            </script>";
        } 
        
        //get password in db
        $row = mysqli_fetch_array($result);
        
        //compare password
        if ($password != $row['User_Password']) {
            echo "<script>
                alert('Tên đăng nhập hoặc mật khẩu không đúng!');
                window.location= 'sign-in.php'
            </script>";
            exit;
        }
        //$query_all = "SELECT * FROM tb_user WHERE USERNAME='$username';";
    

        //Lưu thông tin người đăng nhập
        $_SESSION['FirstName'] = $row['First_Name'];
        $_SESSION['LastName'] = $row['Last_Name'];
        $_SESSION['ID'] = $row['User_Id'];
        $_SESSION['username'] = $username;
        
        echo "<script>                    
                window.location.replace('../Trangchu/Trangchu.php') ;
                window.parent.location.replace('../Trangchu/Trangchu.php');
            </script>";
        $conn->close();
        die();
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signIn.css">
    <title>Document</title>
</head>
<body>
    <div class="signIn">
        <h1>Đăng nhập</h1>
            <form action="" method='post'>
                <div class="signIn__fillOut">
                    <div class="signIn__fillOut__account">
                        <input required type="text" id="accountName" name="accountName"  placeholder="Tài khoản">
                        <input required type="password" id="psw" name="psw" placeholder="Mật khẩu">
                    </div>
                </div>
                <div class="singIn__further">
                    <input type="checkbox" name="Reme" id="Reme" value="password">
                    <label for="Reme">Nhớ thông tin</label>
                    <div class="singIn__further--a"><a href="#">Quên mật khẩu</a></div>
                </div>
                <input type="submit" name="signInSubmit" id="signInSubmit" value="Đăng nhập">
            </form>

            <div class="singIn__signUp"></div>
                <p>Bạn chưa có tài khoản? <a href="/sign-up/sign-up.html">Đăng ký ngay</a></p>
            </div>
    </div> 
</body>

</html>