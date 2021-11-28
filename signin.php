<html lang="vi">

<head>
    <title>ĐĂNG NHẬP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- prepare -->
    <?php
    error_reporting(0);
    ?>

    <!-- connect to db -->
    <?php
    $hostname = "localhost";
    $username = "root";
    $password = "notapw128.";
    $database = "webdatabase";
    $port = 3307;
    $con = new mysqli($hostname, $username, $password, $database, $port);

    if ($con->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>

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

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div style="margin-top: 100px;">
                    <h1>Xample</h1>
                    <h5>Đăng nhập để tiếp tục</h5><br>
                    <?php
                    echo "<form class=\"form-inline\" action=\"signin.php\" method=\"POST\">";
                    echo "<div class=\"input-group\">";
                    echo "<div><input type=\"text\" class=\"form-control\" size=\"30\" placeholder=\"Email hoặc tên đăng nhập\" name=\"username\" required></div><br><br>";
                    echo "<div><input type=\"password\" class=\"form-control\" size=\"30\" placeholder=\"Mật khẩu\" name=\"password\" required></div>";
                    echo "</div><br><br>";

                    $username = $_POST["username"];
                    $password = $_POST["password"];

                    $sql = "SELECT * FROM tbluser WHERE username ='" . $username . "' AND password = '" . $password . "'";
                    $result = $con->query($sql);
                    $user = $result->num_rows;
                    
                    echo "<input class=\"btn\" type=\"submit\" value=\"Đăng nhập\"><br><br>";
                    
                    if($user === 1){
                        echo "success";
                    }else echo "fail";
                    
                    echo "<br><br>";

                    ?>

                    <a href="signup.php" class="text-right">Chưa có tài khoản?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>