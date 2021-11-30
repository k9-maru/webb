<html lang="vi">

<head>
    <title>WEB</title>
    <meta charset="UTF-8">
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
                            <li style="background-color:rgb(60,60,60) !important;"><a href="signin.php">ĐĂNG NHẬP</a>
                            </li>
                            <li style="background-color:rgb(60,60,60) !important;"><a href="signup.php">ĐĂNG KÝ</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron text-center">
        <h1>TRANG QUẢN LÝ</h1>
        <p>Xin chào</p>
    </div>

    <div class="container-fluid">
        <div class="row">
            <a href="addprovider.php" class="btn">Thêm một nhà cung cấp mới</a>
        </div>
    </div>


    <h2 class="text-center">Hoặc sửa nhà cung cấp sẵn có</h2>

    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row text-center">
                <div class="col-12">
                    <form class="form-inline" action="managerhome.php" method="POST">
                        <div class="input-group">
                            <input type="text" class="form-control" size="80" placeholder="Tên nhà cung cấp" name="search_name">
                            <div class="input-group-btn">
                                <button class="btn mod" type="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Mã</th>
                        <th>Tên</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Quản lý</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $search_name = $_POST["search_name"];
                    if ($name == null) {
                        $sql = "SELECT * FROM tblprovider";
                    } else $sql = "SELECT * FROM tblprovider p WHERE p.name LIKE '%" . $search_name . "%'";

                    $result = $con->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["name"] . "</td>";
                            echo "<td>" . $row["address"] . "</td>";
                            echo "<td>" . $row["tel"] . "</td>";
                            echo "<td>" . $row["email"] . "</td>";
                            echo "<td>";
                            // sửa
                            echo "<form action =\"editprovider.php\" method = \"POST\">";
                            echo "<input type=\"hidden\" name = \"edit_id\" value = \"" . $row["id"] . "\">";
                            echo "<input type=\"hidden\" name = \"edit_name\" value = \"" . $row["name"] . "\">";
                            echo "<input type=\"hidden\" name = \"edit_address\" value = \"" . $row["address"] . "\">";
                            echo "<input type=\"hidden\" name = \"edit_tel\" value = \"" . $row["tel"] . "\">";
                            echo "<input type=\"hidden\" name = \"edit_email\" value = \"" . $row["email"] . "\">";
                            echo "<input type=\"submit\" class=\"btn mod\" value=\"Sửa\" name = \"edit\">";
                            echo "</form>";
                            // xóa
                            echo "<form action =\"deleteprovider.php\" method = \"POST\">";
                            echo "<input type=\"hidden\" name = \"del_id\" value = \"" . $row["id"] . "\">";
                            echo "<input type=\"submit\" class=\"btn mod\" value=\"Xoá\" name = \"delete\">";
                            echo "</form>";

                            echo "</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
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