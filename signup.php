<html lang="vi">

<head>
    <title>ĐĂNG KÝ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-fixed-top sticky-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Xample</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">TRANG CHỦ</a></li>
                    <li>
                        <a href="" data-toggle="dropdown">LIÊN HỆ <span class="glyphicon glyphicon-chevron-down" style="font-size: 10px;"></span></a>
                        <ul class="dropdown-menu">
                            <li style="background-color:rgb(60,60,60) !important;"><a href="https://www.facebook.com/tuudotexe/">FACEBOOK</a></li>
                            <li style="background-color:rgb(60,60,60) !important;"><a href="https://github.com/k9-maru">GITHUB</a></li>
                            <li style="background-color:rgb(60,60,60) !important;"><a href="https://bookland128.blogspot.com/">BOOKLAND</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid text-center">
        <div class="row" style="padding-top:80px">
            <div class="col-sm-12">
                <h1>Xample</h1>
                <h5>Tham gia cùng chúng tôi</h5><br>
                <form class="form-inline" action="index.php">
                    <div class="input-group">
                        <div><input type="text" class="form-control" size="30" placeholder="Email hoặc tên đăng nhập" required><br><br></div>
                        <div><input type="password" class="form-control" size="30" placeholder="Mật khẩu" required><br><br></div>
                        <div><input type="password" class="form-control" size="30" placeholder="Nhập lại mật khẩu" required><br><br></div>
                        <div>
                            <span><input type="text" class="form-control" size="30" placeholder="Họ và tên" required></span>
                        </div>
                    </div><br><br>
                    <input class="btn" type="submit" value="Đăng ký"><br><br>
                </form>
                <div>
                    <a href="signin.php">Đã có tài khoản? Đăng nhập ngay</a>
                </div>
            </div>
        </div>

    </div>
</body>

</html>