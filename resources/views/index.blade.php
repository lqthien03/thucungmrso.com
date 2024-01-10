<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <!-- Thêm thư viện Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('js/app.js')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha384-9zsk9MFuyLg0i+0KKEMpxEfQkPp3bjsG+YDxpCpRErnyNwO8vB4lLbJsmFM7a4xm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Thêm Owl Carousel CSS và JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- Thêm jQuery từ CDN (Chắc chắn là bạn thêm jQuery trước khi thêm Owl Carousel) -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Thêm Owl Carousel JS từ CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@400;700&family=Pacifico&display=swap">
    <style>
    /* Reset các margins và paddings mặc định */
    body,
    html {
        margin: 0;
        padding: 0;
        height: 100%;
    }

    /* Chiếm toàn bộ chiều ngang của màn hình */
    body {
        width: 100%;
    }

    /* Tùy chỉnh style cho header */
    .header-container {
        background-color: #fff;
        color: #454545;
        padding: 20px;
        /* thêm padding cho header */
    }

    /* Tùy chỉnh style cho logo */
    .logo-container img {
        max-width: 100%;
        /* Đảm bảo logo không vượt quá kích thước của container */
    }

    /* Tùy chỉnh style cho địa chỉ và liên kết mạng xã hội */
    .address-container {
        color: #999999;
        font-size: 14px;
        margin-bottom: 5px;
        font-weight: 600;
    }

    /* Tùy chỉnh style cho menu danh mục */
    .category-menu-container {
        background-color: #f8f9fa;
        /* Màu nền của menu danh mục */
        padding: 10px;
        /* Thêm padding cho menu danh mục */
    }

    /* Đặt hướng của menu là ngang hàng */
    .flex-row {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    /* Căn giữa theo chiều dọc */
    .align-center {
        align-items: center;
    }

    /* Căn giữa theo chiều ngang */
    .justify-center {
        justify-content: center;
    }

    .navbar-nav .nav-item .nav-link {
        color: white;
    }

    .nav-item {
        transition: 0.3s;
    }

    .navbar-nav .nav-item:hover {
        background-color: #FFFF33;
        /* Màu nền khi hover */
    }

    .navbar-nav .nav-item:hover .nav-link {
        font-weight: bolder;
        color: #DD0000;
        /* Màu chữ khi hover */
    }

    .slanted-div {
        position: relative;
        width: 300px;
        /* Chiều rộng của khung div */
        height: 200px;
        /* Chiều cao của khung div */
        background-color: #007bff;
        /* Màu nền */
        color: #fff;
        /* Màu chữ */
        overflow: hidden;
        /* Ẩn phần cạnh nghiêng nếu nội dung vượt ra khỏi khung */
    }


    /* Tạo phần cạnh nghiêng bằng cách sử dụng pseudo-element */

    .slanted-div:before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        width: 0;
        height: 0;
        transform: skewX(-20deg);
        /* Điều chỉnh cạnh nghiêng bằng cách thay đổi giá trị */
        border-color: transparent transparent transparent #fff;
        /* Màu nền của cạnh nghiêng */
        z-index: 1;
        /* Đặt lớp nghiêng lên trên nền */
    }


    /* Tùy chỉnh style cho nội dung bên trong khung div */

    .content-inside {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        /* Đặt lớp nội dung lên trên cùng */
    }
    </style>
</head>

<body>

    <!-- Header Container -->
    <div class="container-fluid header-container p-3 justify-content-center">
        <div class="row flex-row align-center">
            <!-- Logo và Địa chỉ, Liên kết mạng xã hội -->
            <div class="col-md-2">
                <div class="logo-container align-center">
                    <img src="{{ URL::asset('images/logo.png') }}" tittle="Mr Sọ" alt="Mr Sọ">
                </div>

            </div>

            <!-- Search và Giỏ hàng -->
            <div class="col-md-10 justify-center">
                <div class="container-fluid p-2">
                    <div class="flex-row">
                        <div class="address-container col">
                            Chào mừng bạn đến với nhà phân phối Việt Thành
                        </div>
                        <div class="address-container col">
                            <div class="row">
                                <div class="col-1">
                                    <img src="{{URL::asset('images/icon-store.png')}}" class="icon-store" alt="">

                                </div>
                                <div class="col">
                                    62 Đặng Nhiệm, Tổ 3, KP1, Long Thạnh Mỹ, Quận 9, TPHCM

                                </div>
                            </div>

                        </div>
                        <div class="address-container col">
                            <div class="row">
                                <div class="col-2 p-0">
                                    Liên kết:
                                </div>
                                <div class="col d-flex">
                                    <img src="{{URL::asset('images/logo-circle-y.png')}}" alt="" class="logo-circle">
                                    <img src="{{URL::asset('images/logo-circle-f.png')}}" alt="" class="logo-circle">
                                    <img src="{{URL::asset('images/logo-circle-g.png')}}" alt="" class="logo-circle">
                                    <img src="{{URL::asset('images/logo-circle-t.png')}}" alt="" class="logo-circle">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid p-2">
                    <div class="flex-row">
                        <div class="col-md-5">
                            <!-- Ô tìm kiếm -->
                            <form class="form-inline my-2 my-lg-0">
                                <div class="flex-row">
                                    <div class="input-group">
                                        <input type="text" style="width:400px;" class="form-control"
                                            placeholder="Nhập từ khóa...">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary  text-white" type="button"
                                                style="background-color:#DD0000;">Tìm kiếm</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-2 row">
                            <div class="col-4 d-flex align-items-center justify-content-center p-0"
                                style="background-color:rgb(240, 240, 240); border-radius:100%;">
                                <img src="{{URL::asset('images/icon-store.png')}}" class="icon-header img-fluid" alt="">
                            </div>
                            <div class="col">
                                <p style="margin-bottom:0px">Mở cửa:</p>
                                <b>7h-19h</b>
                            </div>

                        </div>
                        <div class="col-md-2 row">
                            <div class="col-4 d-flex align-items-center justify-content-center p-0"
                                style="background-color:rgb(240, 240, 240); border-radius:100%;">
                                <img src="{{URL::asset('images/icon-phone.png')}}" class="icon-header img-fluid" alt="">
                            </div>
                            <div class="col">
                                <p style="margin-bottom:0px">Hotline:</p>
                                <b>0909179976</b>
                            </div>

                        </div>
                        <div class="col-md-2 row">
                            <div class="col-4 d-flex align-items-center justify-content-center p-0"
                                style="background-color:#DD0000; border-radius:100%;">
                                <img src="{{URL::asset('images/icon-shopping.png')}}" class="icon-header img-fluid"
                                    alt="">
                            </div>
                            <div class="col">
                                <p style="margin-bottom:0px">Giỏ hàng:</p>
                                <b>(0)</b>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Menu Container - Danh mục -->
    <div class="container-fluid category-menu-container justify-content-around" style="background-color:#DD0000;">
        <div class="container mx-auto">
            <nav class="navbar navbar-expand-lg navbar-light justify-content-around p-0 w-100">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav d-flex justify-content-between">
                        <li class="nav-item rounded active p-2">
                            <a class="nav-link" href="#">
                                <h5>TRANG CHỦ</h4>
                            </a>
                        </li>
                        <li class="nav-item rounded p-2">
                            <a class="nav-link" href="#">
                                <h5> GIỚI THIỆU</h5>
                            </a>
                        </li>
                        <li class="nav-item rounded p-2">
                            <a class="nav-link" href="#">
                                <h5> DỊCH VỤ</h5>
                            </a>
                        </li>
                        <li class="nav-item rounded p-2">
                            <a class="nav-link" href="#">
                                <h5> TIN TỨC</h5>
                            </a>
                        </li>
                        <li class="nav-item rounded p-2">
                            <a class="nav-link" href="#">
                                <h5> TUYỂN DỤNG</h5>
                            </a>
                        </li>
                        <li class="nav-item rounded p-2">
                            <a class="nav-link" href="#">
                                <h5> LIÊN HỆ</h5>
                            </a>
                        </li>
                        <!-- Thêm các mục menu khác tùy thuộc vào nhu cầu của bạn -->
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="pet-banner">
        <!-- Hình ảnh thú cưng -->
        <img src="{{ URL::asset('images/banner2.jpg') }}" alt="Pet Image" class="pet-image">

        <!-- Nội dung bên trong banner -->
        <div class="overlay">
            <!-- Nội dung bên trong overlay -->
            <div class="banner-content">
                <p style="margin-bottom:0px;">Hãy cùng chúng tôi mang lại điều tuyệt vời
                    nhất cho động vật của bạn!</p>
            </div>
        </div>
    </div>
    <main class="justify-content-center">
        <section class="container-fluid justify-content-center p-5 align-items-center">
            <div class="row justify-content-center pb-4">
                <button class="btn new-product"> <i class="fas fa-star text-warning"></i> SẢN PHẨM MỚI</button>
                <button class="btn best-seller">SẢN PHẨM BÁN CHẠY</button>
            </div>
            <div class="container-fluid ">
                <div class="row justify-content-center">
                    <!-- Card Sản phẩm 1 -->
                    <div class="col-md-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000 vnđ</s>
                                        </p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger mt-auto">Giỏ hàng</button></div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- Card Sản phẩm 2 -->
                    <div class="col-md-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000 vnđ</s>
                                        </p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- Card Sản phẩm 3 -->
                    <div class="col-md-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000 vnđ</s>
                                        </p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- Card Sản phẩm 4 -->
                    <div class="col-md-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000 vnđ</s>
                                        </p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- Card Sản phẩm 5 -->
                    <div class="col-md-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000 vnđ</s>
                                        </p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                </div>


                            </div>
                        </div>
                    </div>


                    <!-- Thêm các card sản phẩm khác tương tự -->
                </div>
            </div>
        </section>
        <section class="container-fluid justify-content-center p-5">
            <div class="row justify-content-center">
                <div class="col-md-2">
                    <div class="bg-warning shopchochocho pb-5 mb-3">
                        <div class="shopchocho p-1" style="background-color:#DD0000;">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <img src="{{ URL::asset('images/Hinh-icon-cho-Shiba.jpg')}}"
                                        style="object-fit: cover;width:100%" class="rounded-circle" alt="">
                                </div>
                                <div class="col-md-9 text-white">
                                    <p class="mb-0">SHOP CHO CHÓ</p>
                                </div>
                            </div>

                        </div>
                        <ul class="pt-3">
                            <li><a href="">Thức ăn</a></li>
                            <li><a href="">Thuốc cho chó</a></li>
                            <li><a href="">Phụ kiện cho chó</a></li>
                        </ul>

                    </div>
                    <div class="bg-warning shopchochocho pb-5 mb-3">
                        <div class=" shopchocho p-1" style="background-color:#DD0000;">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <img src="{{ URL::asset('images/Hinh-icon-cho-Shiba.jpg')}}"
                                        style="object-fit: cover;width:100%" class="rounded-circle" alt="">
                                </div>
                                <div class="col-md-9 text-white">
                                    <p class="mb-0">SHOP CHO CHÓ</p>
                                </div>
                            </div>

                        </div>
                        <ul class="pt-3">
                            <li><a href="">Thức ăn</a></li>
                            <li><a href="">Thuốc cho chó</a></li>
                            <li><a href="">Phụ kiện cho chó</a></li>
                        </ul>

                    </div>
                    <div class="bg-warning shopchochocho pb-5 mb-3">
                        <div class="shopchocho p-1" style="background-color:#DD0000;">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <img src="{{ URL::asset('images/Hinh-icon-cho-Shiba.jpg')}}"
                                        style="object-fit: cover;width:100%" class="rounded-circle" alt="">
                                </div>
                                <div class="col-md-9 text-white">
                                    <p class="mb-0">SHOP CHO MÈO</p>
                                </div>
                            </div>

                        </div>
                        <ul class="pt-3">
                            <li><a href="">Thức ăn</a></li>
                            <li><a href="">Thuốc cho mèo</a></li>
                            <li><a href="">Phụ kiện cho mèo</a></li>
                        </ul>

                    </div>
                    <div class="bg-warning shopchochocho pb-5 mb-3">
                        <div class="shopchocho p-1" style="background-color:#DD0000;">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <img src="{{ URL::asset('images/Hinh-icon-cho-Shiba.jpg')}}"
                                        style="object-fit: cover;width:100%" class="rounded-circle" alt="">
                                </div>
                                <div class="col-md-9 text-white">
                                    <p class="mb-0">SHOP CHO MÈO</p>
                                </div>
                            </div>

                        </div>
                        <ul class="pt-3">
                            <li><a href="">Thức ăn</a></li>
                            <li><a href="">Thuốc cho mèo</a></li>
                            <li><a href="">Phụ kiện cho mèo</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row justify-content-center">
                        <div class="col-md-3 p-2">
                            <div class="card">
                                <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2"
                                    alt="Sản phẩm 1">
                                <div class="card-body p-2">
                                    <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                    <h6 class="text-primary">Tên Hãng SP</h6>

                                    <div class="row justify-content-center">
                                        <div class="col">
                                            <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                    vnđ</s></p>
                                            <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                                75,000 vnđ</p>
                                        </div>
                                        <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <div class="col-md-3 p-2">
                            <div class="card">
                                <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2"
                                    alt="Sản phẩm 1">
                                <div class="card-body p-2">
                                    <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                    <h6 class="text-primary">Tên Hãng SP</h6>

                                    <div class="row justify-content-center">
                                        <div class="col">
                                            <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                    vnđ</s></p>
                                            <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                                75,000 vnđ</p>
                                        </div>
                                        <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <div class="col-md-3 p-2">
                            <div class="card">
                                <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2"
                                    alt="Sản phẩm 1">
                                <div class="card-body p-2">
                                    <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                    <h6 class="text-primary">Tên Hãng SP</h6>

                                    <div class="row justify-content-center">
                                        <div class="col">
                                            <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                    vnđ</s></p>
                                            <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                                75,000 vnđ</p>
                                        </div>
                                        <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <div class="col-md-3 p-2">
                            <div class="card">
                                <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2"
                                    alt="Sản phẩm 1">
                                <div class="card-body p-2">
                                    <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                    <h6 class="text-primary">Tên Hãng SP</h6>

                                    <div class="row justify-content-center">
                                        <div class="col">
                                            <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                    vnđ</s></p>
                                            <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                                75,000 vnđ</p>
                                        </div>
                                        <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <div class="col-md-3 p-2">
                            <div class="card">
                                <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2"
                                    alt="Sản phẩm 1">
                                <div class="card-body p-2">
                                    <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                    <h6 class="text-primary">Tên Hãng SP</h6>

                                    <div class="row justify-content-center">
                                        <div class="col">
                                            <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                    vnđ</s></p>
                                            <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                                75,000 vnđ</p>
                                        </div>
                                        <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <div class="col-md-3 p-2">
                            <div class="card">
                                <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2"
                                    alt="Sản phẩm 1">
                                <div class="card-body p-2">
                                    <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                    <h6 class="text-primary">Tên Hãng SP</h6>

                                    <div class="row justify-content-center">
                                        <div class="col">
                                            <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                    vnđ</s></p>
                                            <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                                75,000 vnđ</p>
                                        </div>
                                        <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <div class="col-md-3 p-2">
                            <div class="card">
                                <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2"
                                    alt="Sản phẩm 1">
                                <div class="card-body p-2">
                                    <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                    <h6 class="text-primary">Tên Hãng SP</h6>

                                    <div class="row justify-content-center">
                                        <div class="col">
                                            <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                    vnđ</s></p>
                                            <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                                75,000 vnđ</p>
                                        </div>
                                        <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <div class="col-md-3 p-2">
                            <div class="card">
                                <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2"
                                    alt="Sản phẩm 1">
                                <div class="card-body p-2">
                                    <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                    <h6 class="text-primary">Tên Hãng SP</h6>

                                    <div class="row justify-content-center">
                                        <div class="col">
                                            <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                    vnđ</s></p>
                                            <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                                75,000 vnđ</p>
                                        </div>
                                        <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <div class="col-md-3 p-2">
                            <div class="card">
                                <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2"
                                    alt="Sản phẩm 1">
                                <div class="card-body p-2">
                                    <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                    <h6 class="text-primary">Tên Hãng SP</h6>

                                    <div class="row justify-content-center">
                                        <div class="col">
                                            <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                    vnđ</s></p>
                                            <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                                75,000 vnđ</p>
                                        </div>
                                        <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <div class="col-md-3 p-2">
                            <div class="card">
                                <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2"
                                    alt="Sản phẩm 1">
                                <div class="card-body p-2">
                                    <p class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                    <h6 class="text-primary">Tên Hãng SP</h6>

                                    <div class="row justify-content-center">
                                        <div class="col">
                                            <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                    vnđ</s></p>
                                            <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                                75,000 vnđ</p>
                                        </div>
                                        <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <div class="col-md-3 p-2">
                            <div class="card">
                                <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2"
                                    alt="Sản phẩm 1">
                                <div class="card-body p-2">
                                    <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                    <h6 class="text-primary">Tên Hãng SP</h6>

                                    <div class="row justify-content-center">
                                        <div class="col">
                                            <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                    vnđ</s></p>
                                            <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                                75,000 vnđ</p>
                                        </div>
                                        <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <div class="col-md-3 p-2">
                            <div class="card">
                                <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2"
                                    alt="Sản phẩm 1">
                                <div class="card-body p-2">
                                    <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                    <h6 class="text-primary">Tên Hãng SP</h6>

                                    <div class="row justify-content-center">
                                        <div class="col">
                                            <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                    vnđ</s></p>
                                            <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                                75,000 vnđ</p>
                                        </div>
                                        <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <div class="col-md-3 p-2">
                            <div class="card">
                                <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2"
                                    alt="Sản phẩm 1">
                                <div class="card-body p-2">
                                    <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                    <h6 class="text-primary">Tên Hãng SP</h6>

                                    <div class="row justify-content-center">
                                        <div class="col">
                                            <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                    vnđ</s></p>
                                            <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                                75,000 vnđ</p>
                                        </div>
                                        <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <div class="col-md-3 p-2">
                            <div class="card">
                                <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2"
                                    alt="Sản phẩm 1">
                                <div class="card-body p-2">
                                    <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                    <h6 class="text-primary">Tên Hãng SP</h6>

                                    <div class="row justify-content-center">
                                        <div class="col">
                                            <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                    vnđ</s></p>
                                            <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                                75,000 vnđ</p>
                                        </div>
                                        <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <div class="col-md-3 p-2">
                            <div class="card">
                                <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2"
                                    alt="Sản phẩm 1">
                                <div class="card-body p-2">
                                    <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                    <h6 class="text-primary">Tên Hãng SP</h6>

                                    <div class="row justify-content-center">
                                        <div class="col">
                                            <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                    vnđ</s></p>
                                            <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                                75,000 vnđ</p>
                                        </div>
                                        <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <div class="col-md-3 p-2">
                            <div class="card">
                                <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2"
                                    alt="Sản phẩm 1">
                                <div class="card-body p-2">
                                    <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                    <h6 class="text-primary">Tên Hãng SP</h6>

                                    <div class="row justify-content-center">
                                        <div class="col">
                                            <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                    vnđ</s></p>
                                            <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                                75,000 vnđ</p>
                                        </div>
                                        <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <!--  -->
                    </div>
                </div>
            </div>
        </section>

        <!-- section banner -->
        <section class="container-fluid justify-content-center p-2">
            <div class="row mx-auto justify-content-center banner2">
                <div class="col-md-6">
                    <div class="card">
                        <img src="{{ URL::asset('images/for-dog.png')}}" class="card-img-top" alt="Banner 1">
                        <!-- Thêm nội dung cho banner 1 nếu cần -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <img src="{{ URL::asset('images/for-dog.png')}}" class="card-img-top" alt="Banner 2">
                        <!-- Thêm nội dung cho banner 2 nếu cần -->
                    </div>
                </div>

            </div>
        </section>

        <!-- section sp -->
        <section class="container-fluid justify-content-center p-5">
            <div class="row justify-content-center">
                <div class="col-md-2">
                    <div class="bg-warning shopchochocho pb-5 mb-3">
                        <div class="shopchocho p-1" style="background-color:#DD0000;">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <img src="{{ URL::asset('images/Hinh-icon-cho-Shiba.jpg')}}"
                                        style="object-fit: cover;width:100%" class="rounded-circle" alt="">
                                </div>
                                <div class="col-md-9 text-white">
                                    <p class="mb-0">SẢN PHẨM LÚA GẠO</p>
                                </div>
                            </div>

                        </div>
                        <ul class="pt-3">
                            <li><a href="">Gạo</a></li>
                            <li><a href="">Nếp</a></li>
                        </ul>

                    </div>
                    <div class="bg-warning shopchochocho pb-5 mb-3">
                        <div class="shopchocho p-1" style="background-color:#DD0000;">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <img src="{{ URL::asset('images/Hinh-icon-cho-Shiba.jpg')}}"
                                        style="object-fit: cover;width:100%" class="rounded-circle" alt="">
                                </div>
                                <div class="col-md-9 text-white">
                                    <p class="mb-0">SẢN PHẨM LÚA GẠO</p>
                                </div>
                            </div>

                        </div>
                        <ul class="pt-3">
                            <li><a href="">Gạo</a></li>
                            <li><a href="">Nếp</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row justify-content-center">
                        <div class="col-md-3 p-2">
                            <div class="card">
                                <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2"
                                    alt="Sản phẩm 1">
                                <div class="card-body p-2">
                                    <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                    <h6 class="text-primary">Tên Hãng SP</h6>

                                    <div class="row justify-content-center">
                                        <div class="col">
                                            <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                    vnđ</s></p>
                                            <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                                75,000 vnđ</p>
                                        </div>
                                        <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <div class="col-md-3 p-2">
                            <div class="card">
                                <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2"
                                    alt="Sản phẩm 1">
                                <div class="card-body p-2">
                                    <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                    <h6 class="text-primary">Tên Hãng SP</h6>

                                    <div class="row justify-content-center">
                                        <div class="col">
                                            <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                    vnđ</s></p>
                                            <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                                75,000 vnđ</p>
                                        </div>
                                        <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <div class="col-md-3 p-2">
                            <div class="card">
                                <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2"
                                    alt="Sản phẩm 1">
                                <div class="card-body p-2">
                                    <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                    <h6 class="text-primary">Tên Hãng SP</h6>

                                    <div class="row justify-content-center">
                                        <div class="col">
                                            <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                    vnđ</s></p>
                                            <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                                75,000 vnđ</p>
                                        </div>
                                        <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <div class="col-md-3 p-2">
                            <div class="card">
                                <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2"
                                    alt="Sản phẩm 1">
                                <div class="card-body p-2">
                                    <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                    <h6 class="text-primary">Tên Hãng SP</h6>

                                    <div class="row justify-content-center">
                                        <div class="col">
                                            <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                    vnđ</s></p>
                                            <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                                75,000 vnđ</p>
                                        </div>
                                        <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <div class="col-md-3 p-2">
                            <div class="card">
                                <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2"
                                    alt="Sản phẩm 1">
                                <div class="card-body p-2">
                                    <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                    <h6 class="text-primary">Tên Hãng SP</h6>

                                    <div class="row justify-content-center">
                                        <div class="col">
                                            <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                    vnđ</s></p>
                                            <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                                75,000 vnđ</p>
                                        </div>
                                        <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <div class="col-md-3 p-2">
                            <div class="card">
                                <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2"
                                    alt="Sản phẩm 1">
                                <div class="card-body p-2">
                                    <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                    <h6 class="text-primary">Tên Hãng SP</h6>

                                    <div class="row justify-content-center">
                                        <div class="col">
                                            <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                    vnđ</s></p>
                                            <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                                75,000 vnđ</p>
                                        </div>
                                        <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <div class="col-md-3 p-2">
                            <div class="card">
                                <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2"
                                    alt="Sản phẩm 1">
                                <div class="card-body p-2">
                                    <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                    <h6 class="text-primary">Tên Hãng SP</h6>

                                    <div class="row justify-content-center">
                                        <div class="col">
                                            <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                    vnđ</s></p>
                                            <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                                75,000 vnđ</p>
                                        </div>
                                        <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <div class="col-md-3 p-2">
                            <div class="card">
                                <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2"
                                    alt="Sản phẩm 1">
                                <div class="card-body p-2">
                                    <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                    <h6 class="text-primary">Tên Hãng SP</h6>

                                    <div class="row justify-content-center">
                                        <div class="col">
                                            <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000
                                                    vnđ</s></p>
                                            <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                                75,000 vnđ</p>
                                        </div>
                                        <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <!--  -->
                    </div>
                </div>
            </div>
        </section>

        <!-- section vattunongnghiep  -->
        <section class="container-fluid justify-content-center p-2">
            <div class="col-md-2 justify-content-center vattunongnghiep">
                <div class="shopchocho p-1" style="background-color:#DD0000;">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <img src="{{ URL::asset('images/Hinh-icon-cho-Shiba.jpg')}}"
                                style="object-fit: cover;width:100%" class="rounded-circle" alt="">
                        </div>
                        <div class="col-md-9 p-1 text-white">
                            <p class="mb-0">VẬT TƯ NÔNG NGHIỆP</p>
                        </div>
                    </div>

                </div>

            </div>
            <div class="container-fluid p-4">
                <div class="row justify-content-center">
                    <!-- Card Sản phẩm 1 -->
                    <div class="col-md-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000 vnđ</s>
                                        </p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- Card Sản phẩm 2 -->
                    <div class="col-md-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000 vnđ</s>
                                        </p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- Card Sản phẩm 3 -->
                    <div class="col-md-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000 vnđ</s>
                                        </p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- Card Sản phẩm 4 -->
                    <div class="col-md-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000 vnđ</s>
                                        </p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- Card Sản phẩm 5 -->
                    <div class="col-md-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/sanpham.jpg')}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">Balo Phi Hành Gia Vận Chuyển Chó Mèo</b>
                                <h6 class="text-primary">Tên Hãng SP</h6>

                                <div class="row justify-content-center">
                                    <div class="col">
                                        <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>90,000 vnđ</s>
                                        </p>
                                        <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                            75,000 vnđ</p>
                                    </div>
                                    <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!-- Thêm các card sản phẩm khác tương tự -->
                </div>
                <!-- 

         -->
                <div class="container-fluid p-5">
                    <div class="row justify-content-center">
                        <div class="col-md-2 partner-logo">
                            <img src="{{ URL::asset('images/logo-doi-tac.png')}} " alt="" class="card-img">
                        </div>
                        <div class="col-md-2 partner-logo">
                            <img src="{{ URL::asset('images/logo-doi-tac.png')}} " alt="" class="card-img">
                        </div>
                        <div class="col-md-2 partner-logo">
                            <img src="{{ URL::asset('images/logo-doi-tac.png')}} " alt="" class="card-img">
                        </div>
                        <div class="col-md-2 partner-logo">
                            <img src="{{ URL::asset('images/logo-doi-tac.png')}} " alt="" class="card-img">
                        </div>
                        <div class="col-md-2 partner-logo">
                            <img src="{{ URL::asset('images/logo-doi-tac.png')}} " alt="" class="card-img">
                        </div>

                    </div>
                </div>
                <!--  -->
                

            </div>
        </section>
        <!-- -->
        <div class="container-fluid text-white" style="background-color:#DD0000;">
                    <div class="row justify-content-around p-5">
                        <div class="col-md-3">
                            <div class="row justify-content-center">
                                <div class="col-md-3">
                                    <img src="{{ URL::asset('images/icon-diamond.png') }}" style="width:100%;" alt="">
                                </div>
                                <div class="col-md-8">
                                    <h5>UY TÍN HÀNG ĐẦU</h5>
                                    <p>Lorem Ipsum chỉ đơn giản là một đoạn văn giả</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 justify-content-center">
                            <div class="row justify-content-center">
                                <div class="col-md-3">
                                    <img src="{{ URL::asset('images/logo-24-7.png') }}" style="width:100%;" alt="">
                                </div>
                                <div class="col-md-8">
                                    <h5>HỖ TRỢ 24/7</h5>
                                    <p>Lorem Ipsum chỉ đơn giản là một đoạn văn giả</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 justify-content-center">
                            <div class="row justify-content-center">
                                <div class="col-md-3 ">
                                    <img src="{{ URL::asset('images/thanhtoandedang.png') }}" style="width:100%;"
                                        alt="">
                                </div>
                                <div class="col-md-8">
                                    <h5>THANH TOÁN DỄ DÀNG</h5>
                                    <p>Lorem Ipsum chỉ đơn giản là một đoạn văn giả</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 justify-content-center">
                            <div class="row justify-content-center">
                                <div class="col-md-3">
                                    <img src="{{ URL::asset('images/pig2.png') }}" style="width:100%;" alt="">
                                </div>
                                <div class="col-md-8">
                                    <h5>MUA HÀNG TIẾT KIỆM</h5>
                                    <p>Lorem Ipsum chỉ đơn giản là một đoạn văn giả</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

        <section class="container-fluid justify-content-center d-flex align-items-center pt-5 ">
            <div class="row justify-content-center pt-0 blog">
                <div class="col-md-6">
                    <div class="container">
                        <div class="tittle-blog">
                            <h2 class="">
                                Tin Tức
                            </h2>
                            <p>Lorem chỉ đơn giản là một đoạn văn giả</p>
                        </div>
                        <!--  -->
                        <div class="blog-post row pb-2">
                            <div class="col-5">
                                <img src="{{URL::asset('images/dog.jpg')}}" alt="Blog Post Image"
                                    class="img-fluid w-100 p-1">
                            </div>
                            <div class="col-7">
                                <div class="blog-post-content">
                                    <h3>Blog Post Title 1</h3>
                                    <p>This is the content of the blog post. You can add text, images, and other
                                        elements here.</p>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="blog-post row pb-2">
                            <div class="col-5">
                                <img src="{{URL::asset('images/dog.jpg')}}" alt="Blog Post Image"
                                    class="img-fluid w-100 p-1">
                            </div>
                            <div class="col-7">
                                <div class="blog-post-content">
                                    <h3>Blog Post Title 1</h3>
                                    <p>This is the content of the blog post. You can add text, images, and other
                                        elements here.</p>
                                </div>
                            </div>
                        </div>
                        <!--  -->

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container">
                        <div class="tittle-blog">
                            <h2 class="">Cảm Nhận Khách Hàng</h2>
                            <p>Lorem chỉ đơn giản là một đoạn văn giả</p>
                        </div>
                        <div class="container bg-warning">
                            <!--  -->
                            <div class="owl-carousel">
                                <div class="item"><img src="{{URL::asset('images/kh.jpg')}}" alt="Avatar 1"></div>
                                <div class="item"><img src="path/to/avatar2.jpg" alt="Avatar 2"></div>
                                <!-- Thêm các item khác nếu cần -->
                            </div>
                            <!--  -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid justify-content-center d-flex align-items-center p-5 mt-5 video">
            <div class="row justify-content-center">
                <div class="col-md-3 p-3">
                    <video class="img-fluid w-100" controls>
                        <source src="{{URL::asset('images/dog.mp4')}}" type="video/mp4">
                    </video>
                    <p>Lorem chỉ đơn giản là một đoạn văn giả, được dùng vào việc trình bày</p>
                </div>
                <div class="col-md-3 p-3">
                    <video class="img-fluid w-100" controls>
                        <source src="{{URL::asset('images/dog.mp4')}}" type="video/mp4">
                    </video>
                    <p>Lorem chỉ đơn giản là một đoạn văn giả, được dùng vào việc trình bày</p>
                </div>
                <div class="col-md-4 p-3">
                    <div class="fanpage bg-light">
                        <!-- Thay đổi đường dẫn sau data-href để thay đổi fanpage -->
                        <div class="fb-page" data-href="https://www.facebook.com/profile.php?id=61554409901863"
                            data-tabs="timeline" data-width="500" data-height="400" data-small-header="false"
                            data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/profile.php?id=61554409901863"
                                class="fb-xfbml-parse-ignore">
                                <a href="https://www.facebook.com/profile.php?id=61554409901863">Facebook</a>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

    </main>
    <div class="footer container-fluid justify-content-center d-flex align-items-center p-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="col-md-8">
                    <h3 class="text-warning tittle-footer">NHÀ PHÂN PHỐI HIỆP THÀNH</h3>
                    <ul class="list-inline">
                        <li class="list-inline-item"><i class="fas fa-map-marker-alt"></i> Địa chỉ: 685 Nguyễn Xiển,
                            Long Thạnh Mỹ, Quận 9, TPHCM</li>
                        <li class="list-inline-item"><i class="fas fa-phone"></i>Điện thoại: 0909 179 979-028 896 1777
                        </li>
                        <li class="list-inline-item"><i class="fas fa-envelope"></i>Email: gianghiepan27051992@gmail.com
                        </li>
                        <li class="list-inline-item"><i class="fas fa-globe"></i> <a
                                href="https://www.example.com">www.thucungmrso.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 justify-content-center">
                <h5>CHÍNH SÁCH</h5>

                <ul class="list-inline">
                    <li><a class="text-white" href="/">Hướng dẫn mua hàng</a> </li>
                    <li><a class="text-white" href=""> Chính sách đổi trả</a></li>
                    <li><a class="text-white" href="">Chính sách sao hàng</a> </li>
                </ul>
                <ul class="list-inline">
                    <div class="row">

                        <li class="list-inline-item col-2 p-0"><a href="https://www.facebook.com/example"><img
                                    src="{{URL::asset('images/facebook.png')}}" alt=""></a></li>
                        <li class="list-inline-item col-2 p-0"><a href="https://plus.google.com/example"><img
                                    src="{{URL::asset('images/ggicon.png')}}" alt=""></a></li>
                        <li class="list-inline-item col-2 p-0"><a href="https://zalo.me/example"><img
                                    src="{{URL::asset('images/zalo.png')}}" alt=""></a></li>
                        <li class="list-inline-item col-2 p-0"><a href="https://www.youtube.com/example"><img
                                    src="{{URL::asset('images/youtube.png')}}" alt=""></a></li>
                </ul>
            </div>
            <div class="col-md-3 justify-content-center">

                <div class="col-md-12">
                    <h5>ĐƯỜNG DÂY NÓNG</h5>
                    <div class="row">
                        <div class="col-3"><img src="{{URL::asset('images/phone.png')}}" class="w-100" alt=""></div>
                        <div class="col p-2">
                            <h5>0909 179 979 <br> 0283 896 1777</h5>
                        </div>
                    </div>

                    <h5>THANH TOÁN</h5>
                    <ul class="list-inline">
                        <div class="row">

                            <li class="list-inline-item col-2 p-0"><a href="https://www.facebook.com/example"><img
                                        src="{{URL::asset('images/mastercard.png')}}" alt=""></a></li>
                            <li class="list-inline-item col-2 p-0"><a href="https://plus.google.com/example"><img
                                        src="{{URL::asset('images/visaa.png')}}" alt=""></a></li>
                            <li class="list-inline-item col-2 p-0"><a href="https://zalo.me/example"><img
                                        src="{{URL::asset('images/jcb.jpg')}}" alt=""></a></li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
    <footer class="container-fluid bg-warning text-danger text-center py-2">
        <div class="row justify-content-around align-items-center">
            <p> &copy; Hiệp Thành All rights reserved. Design by BlueWeb 2023</p>
            <p>Online: 9 | Tuần: 27 | Tổng truy cập: 578515</p>
        </div>

    </footer>
    <!-- Các nội dung khác của trang web ở đây -->
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0"
        nonce="your-nonce"></script>

    <!-- Thêm các thư viện Bootstrap JavaScript ở cuối trang -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>