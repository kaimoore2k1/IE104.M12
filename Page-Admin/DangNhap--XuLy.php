<?php
    require "../connect.php";
    $username = addslashes($_POST['UserName']);
    $password = addslashes($_POST['Password']);
    
    $sql = "SELECT * FROM admin WHERE Admin_Username = '$username'";
    $kq = $conn->query($sql);
    $row = $kq->fetch_assoc();
    if($row) {
        $sql_check_pw = "SELECT Admin_Password FROM admin WHERE Admin_Password = '$password'";
        $kq_check_pw = $conn->query($sql_check_pw);
        $row_check_pw = $kq_check_pw->fetch_assoc();
        if($row_check_pw) {
            session_start();
            $_SESSION['FullName'] = $row['Admin_FullName'];
            $_SESSION['ID'] = $row['Admin_ID '];
            $_SESSION['Role'] = $row['Grant'];
            header("location:TrangChu.php");
        }
        else {
            echo "
                <script>
                    alert('Sai tài khoản hoặc mật khẩu!')
                    window.location.href = 'DangNhap.php'
                </script>
            ";
        }
    }
    else {
        echo "
            <script>
                alert('Sai tài khoản hoặc mật khẩu!')
                window.location.href = 'DangNhap.php'
            </script>
        ";
    }
?>