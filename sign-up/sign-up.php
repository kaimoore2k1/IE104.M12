
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sign-up.css">
    <title>Sign up</title>
</head>

<body>
    <main>
        <h1>Đăng ký</h1>
        <form action="xuly.php" method="post">
            <div class="information">
                <input required type="text" id="last-name" name="last-name" placeholder="Họ">
                <input required type="text" id="first-name" name="first-name" placeholder="Tên">
                <input required type="text" id="username" name="username" placeholder="Tài khoản">
                <input required type="email" name="email" id="email" placeholder="E-mail">
                <input required type="password" id="password" name="password" placeholder="Mật khẩu">
                <input required type="password" id="retype-password" name="retype-password" placeholder="Nhập lại mật khẩu">
            </div>
            <div class="term">
                <input required type="checkbox" id="check" name="check">
                <p>Tôi đồng ý với các <a href="#">điều khoản</a></p>
            </div>
            <input type="submit" value="Đăng ký" name='dangky' class="sign-up">
        </form>
        <p class="sign-in">Bạn đã có tài khoản?<a href="\sign-in\sign-in.php">Đăng nhập</a></p>
    </main>
</body>

<script>
    const passwordElement = document.querySelector('#password')
    const retypePasswordElement = document.querySelector('#retype-password')

    retypePasswordElement.addEventListener("focusout", () => {
        if (passwordElement.value != retypePasswordElement.value) {
            retypePasswordElement.setCustomValidity("Mật khẩu nhập lại khác với mật khẩu ở trên")
        }
        else {
            retypePasswordElement.setCustomValidity("")
        }
    })
</script>

</html>

