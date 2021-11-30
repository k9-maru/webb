<html lang="vi">

<head>
    <title>WEB</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body id="myPage">
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

    <div class="jumbotron">
        <h1 class="text-center">XAMPLE, INC.</h1>
        <h5 class="text-center">Quản lý nhà cung cấp</h5>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8 text-left">
                <h2><strong>Lựa chọn nhà cung cấp phù hợp</strong></h2><br>
                <p>Lựa chọn đơn vị cung cấp sẽ ảnh hưởng rất lớn đến việc chọn nguồn<br> cung cấp tài sản phù hợp, hiệu quả <strong>để sử dụng được hết công năng,<br> hiệu suất của tài sản</strong>, các vấn đề liên quan đến tuổi thọ tài sản.
                </p>
            </div>
            <div class="col-sm-4 text-right">
                <span class="glyphicon glyphicon-globe logo"></span>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-custom">
        <div class="row">
            <div class="col-sm-4 text-left">
                <span class="glyphicon glyphicon-signal logo"></span>
            </div>
            <div class="col-sm-8 text-right">
                <h2>Lợi ích sử dụng phần mềm quản lý nhà cung cấp</h2><br>
                <p>Kiểm soát được chi phí, các rủi ro tiềm ẩn</p>
                <p>Có được nhiều thông tin tổng quan, chi tiết về nhà cung cấp</p>
                <p>Giúp doanh nghiệp quản lý được các báo cáo đánh giá, tình trạng của nhà cung cấp</p>
            </div>
        </div>
    </div>

    <div class="container-fluid text-center">
        <h2>Dịch vụ cung cấp</h2>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-plus icon"></span>
                <h3><strong>THÊM</strong></h3>
                <p>Thêm nhà cung cấp</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-pencil icon"></span>
                <h3><strong>SỬA</strong></h3>
                <p>Sửa thông tin nhà cung cấp</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-minus icon"></span>
                <h3><strong>XÓA</strong>></h3>
                <p>Xóa nhà cung cấp</p>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-custom">
        <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <h4>"NHẬN XÉT 1"<br><span style="font-style:normal;">Michael Roe, Vice President, Comment Box</span>
                    </h4>
                </div>
                <div class="item">
                    <h4>"NHẬN XÉT 2"<br><span style="font-style:normal;">John Doe, Salesman, Rep Inc</span></h4>
                </div>
                <div class="item">
                    <h4>"NHẬN XÉT 3"<br><span style="font-style:normal;">Chandler Bing, Actor, FriendsAlot</span></h4>
                </div>
            </div>

            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container-fluid text-center">
        <h2>Khách hàng nổi bật</h2>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <img class="img" src="https://gsoft.com.vn/wp-content/uploads/2020/07/sacombank.png">
            </div>
            <div class="col-sm-4">
                <img class="img" src="https://gsoft.com.vn/wp-content/uploads/2020/07/abbank.png">
            </div>
            <div class="col-sm-4">
                <img class="img" src="https://gsoft.com.vn/wp-content/uploads/2020/07/viettel.png">
            </div>
        </div><br><br>
        <div class="row">
            <div class="col-sm-4">
                <img class="img" src="https://gsoft.com.vn/wp-content/uploads/2020/12/ngan-hang-BIDV.png">
            </div>
            <div class="col-sm-4">
                <img class="img" src="https://gsoft.com.vn/wp-content/uploads/2020/12/nam-a-bank-logo.png">
            </div>
            <div class="col-sm-4">
                <img class="img" src="https://gsoft.com.vn/wp-content/uploads/2020/07/vietcapitalbank.png">
            </div>
        </div>
    </div>

    <footer class="container-fluid text-center bg-ft">
        <div class="row">
            <div class="col-sm-5">
                <h3 class="text-center">Bản Đồ</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.3024241108383!2d105.78573631424445!3d20.980510994801083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135accdd8a1ad71%3A0xa2f9b16036648187!2zSOG7jWMgdmnhu4duIEPDtG5nIG5naOG7hyBCxrB1IGNow61uaCB2aeG7hW4gdGjDtG5n!5e0!3m2!1svi!2s!4v1637731311527!5m2!1svi!2s"
                    width="400" height="250" style="border:0;" allowfullscreen="no" loading="lazy"></iframe>
            </div>
            <div class="col-sm-7">
                <h3 class="text-center">Liên Hệ Chúng Tôi</h3>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Họ tên:" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="tel" name="tel" placeholder="Số điện thoại:" type="text" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email:" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Ý kiến:" rows="5"></textarea><br>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button class="btn pull-right" type="submit">Gửi</button>
                    </div>
                </div>
            </div>
        </div><br><br>
        <div class="row">
            <a href="#myPage">
                <span class="glyphicon glyphicon-chevron-up "></span>
            </a>
            <p>Bootstrap Theme modified by <a href="https://github.com/k9-maru" style="color: orangered !important">ME</a></p>
        </div>
    </footer>
</body>

</html>