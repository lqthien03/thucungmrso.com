<!DOCTYPE html>
<html lang="vi">

<head>
    {{-- <!-- Basehref -->
<base href="https://thucungmrso.com/" /> --}}
    <!-- Basehref -->
    <base href="http://127.0.0.1:8000/" />
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop thú cưng Mr Sọ | Chuyên thức ăn, thuốc, phụ kiện dành thú cưng |</title>
<meta name="keywords" content="Shop thú cưng Mr Sọ | Chuyên thức ăn, thuốc, phụ kiện dành cho thú cưng"/>
<meta name="description" content="Shop thú cung Mr Sọ | Cung cấp thức ăn cho chó,thức ăn cho mèo,thức ăn cho gà, thuốc cho chó, thuốc cho mèo, thuốc cho gà,phụ kiện cho chó, phụ kiện cho mèo, phụ kiện cho gà"/>
<meta name="robots" content="index,follow" />
<link href="{{ URL::asset('images/logo.png')}}" rel="shortcut icon" type="image/x-icon" />

<!-- Webmaster Tool -->

<!-- GEO -->
<meta name="geo.region" content="VN" />
<meta name="geo.placename" content="Hồ Chí Minh" />
<meta name="geo.position" content="10.823099;106.629664" />
<meta name="ICBM" content="10.823099, 106.629664" />

<!-- Author - Copyright -->
<meta name='revisit-after' content='1 days' />
<meta name="author" content="Shop thú cưng Mr Sọ" />
<meta name="copyright" content="Shop thú cưng Mr Sọ - [gianghiepan27051992@gmail.com]" />

<!-- Facebook -->
<meta property="og:type" content="website" />
<meta property="og:site_name" content="Shop thú cưng Mr Sọ" />
<meta property="og:title" content="Shop thú cưng Mr Sọ | Thức ăn | Thuốc | Phụ kiện | Cho thú cưng của bạn" />
<meta property="og:description" content="Shop thú cưng Mr Sọ | Chuyên cung cấp thức ăn cho thú cưng, thuốc cho thú cưng, phụ kiện cho thú cưng" />
<meta property="og:url" content="" />
<meta property="og:image" content="https://thucungmrso.com/images/logo.png" />
<meta property="og:image:alt" content="Shop thú cưng Mr Sọ | Thức ăn | Thuốc | Phụ kiện | Cho thú cưng của bạn" />
<meta property="og:image:type" content="image/jpeg" />
<meta property="og:image:width" content="958" />
<meta property="og:image:height" content="384" />

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="gianghiepan27051992@gmail.com" />
<meta name="twitter:creator" content="Shop thú cưng Mr Sọ" />
<meta property="og:url" content="" />
<meta property="og:title" content="Shop thú cưng Mr Sọ | Thức ăn | Thuốc | Phụ kiện | Cho thú cưng của bạn" />
<meta property="og:description" content="Shop thú cưng Mr Sọ | Chuyên cung cấp thức ăn cho thú cưng, thuốc cho thú cưng, phụ kiện cho thú cưng" />
<meta property="og:image" content="" />

<!-- Canonical -->
<link rel="canonical" href="http://thucungmrso.com/" />

<!-- Chống đổi màu trên IOS -->
<meta name="format-detection" content="telephone=no">

<!-- Thêm thư viện Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<!-- Add Bootstrap CSS -->

<!-- Add Slick CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>


    <!-- Thêm Owl Carousel CSS và JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- Thêm jQuery từ CDN (Chắc chắn là bạn thêm jQuery trước khi thêm Owl Carousel) -->


    <!-- Thêm Owl Carousel JS từ CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@400;700&family=Pacifico&display=swap">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7V54KV8HC0"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-7V54KV8HC0');
    </script>
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "Shop thú cưng Mr Sọ",
          "logo": "http://thucungmrso.com/images/logo.png",
          "description": "Shop thú cưng Mr Sọ chuyên thức ăn, thuốc, phụ kiện dành cho thú cưng như chó, mèo ,gà",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "62 Đặng Nhiệm, Tổ 3, KP1, Long Thạnh Mỹ, Quận 9, TPHCM",
            "postalCode": "700000",
            "addressLocality": "Thành phố Hồ Chí Minh",
            "addressRegion": "Tỉnh/Thành phố",
            "addressCountry": "Việt Nam"
          },
          "telephone": "0909179979",
          "email": "gianghiepan27051992@gmail.com",
          "url": "http://thucungmrso.com"
        }
      </script>
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

    <header>
        @yield('header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @yield('footer')
    </footer>

</body>
</html>
