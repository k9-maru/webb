<html lang="vi">

<head>
    <title>WEB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
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

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
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
                    <li><a href="" data-toggle="dropdown">CÁ NHÂN <span class="glyphicon glyphicon-chevron-down" style="font-size: 10px;"></span></a>
                        <ul class="dropdown-menu">
                            <li style="background-color:rgb(60,60,60) !important;"><a href="managerhome.php">QUẢN LÝ</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron text-center">
        <h1>TRANG QUẢN LÝ</h1>
        <p>Sửa thông tin nhà cung cấp</p>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <?php
                $edit_id = $_POST["edit_id"];
                $edit_name = $_POST["edit_name"];
                $edit_address = $_POST["edit_address"];
                $edit_tel = $_POST["edit_tel"];
                $edit_email = $_POST["edit_email"];

                echo "<form class=\"form-inline\" method=\"POST\" action=\"editprovider.php\">";
                echo "<input type= \"hidden\" name = \"sid\" value = \"" . $edit_id . "\">";
                echo "<input type=\"text\" class=\"form-control\" size=\"30\" name=\"sname\" placeholder = \"" . $edit_name . "\" required><br><br>";
                echo "<input type=\"text\" class=\"form-control\" size=\"30\" name=\"saddress\" placeholder = \"" . $edit_address . "\" required><br><br>";
                echo "<input type=\"text\" class=\"form-control\" size=\"30\" name=\"stel\" placeholder = \"" . $edit_tel . "\" required><br><br>";
                echo "<input type=\"email\" class=\"form-control\" size=\"30\" name=\"semail\" placeholder = \"" . $edit_email . "\" required><br><br>";
                echo "<input type=\"submit\" class=\"btn\" value=\"Sửa\"><br><br>";
                echo "</form>";

                $id = $_POST["sid"];
                $name = $_POST["sname"];
                $address = $_POST["saddress"];
                $tel = $_POST["stel"];
                $email = $_POST["semail"];

                $sql = "UPDATE tblprovider SET name = '" . $name . "', address = '" . $address . "', tel ='" . $tel . "', email = '" . $email . "' WHERE id = '" . $id . "'";
                $con->query($sql);

                ?>
            </div>
        </div>
    </div>

    <footer class="container-fluid text-center bg-ft">
        <div class="row">
            <a href="#myPage">
                <span class="glyphicon glyphicon-chevron-up "></span>
            </a>
            <p>Bootstrap Theme modified by <a href="https://github.com/k9-maru" style="color: orangered !important">ME</a></p>
        </div>
    </footer>
</body>

</html>