<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="DangNhap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Đăng nhập</title>
</head>
<body>
    <div class="row" >
        <div class="col-md-6" >

            <img src="IMG/Logo-Travel-full(1).png" alt="Logo" class="img--css">
        </div>
        <div class="col-md-4">
            <section>
                <form id="account" method="POST" action="DangNhap--XuLy.php">
                    <h2 class="h2--css">Chào mừng đến với UITour.</h2>
                    <hr />
                    <div class="form-group">
                        <label for="UserName">Nhập Tài Khoản</label>
                        <input name="UserName" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="Password">Nhập Passwork</label>
                        <input type="password" name="Password" class="form-control" />
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <input type="checkbox" for="Input.RememberMe" />
                            <label>
                                Nhớ mật khẩu
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button name="Submit" type="submit" class="btn btn-primary">Đăng nhập</button>
                    </div>
                    <div class="nav flex-column">
                        <a href="" class="">Quên mật khẩu?</a>
                        <a href="">Đăng kí tài khoản mới</a>
                    </div>
                </form>
            </section>
        </div>
    </div>
</body>
</html>