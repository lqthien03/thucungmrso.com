<!-- Header Container -->
<style>

</style>

<div class="container-fluid header-container p-3 justify-content-center ">
    <div class="row flex-row align-center">
        <!-- Logo và Địa chỉ, Liên kết mạng xã hội -->
        <div class="col-md-2 row">
            <div class="logo-container align-center col p-0">
                <a href="/">
                <img src="{{ URL::asset('images/logo.png') }}" tittle="Mr Sọ" alt="Mr Sọ">
            </a>
            </div>
            <div class="col-8 info">
                <h1>SHOP THÚ CƯNG MR.SỌ</h1>
                <p>62 Đặng Nhiệm, Tổ 3, KP1, Long Thạnh Mỹ, Quận 9, TPHCM</p>
            </div>

        </div>

        <!-- Search và Giỏ hàng -->
        <div class="col-md-10 justify-center">
            <div class="container-fluid p-2">
                <div class="flex-row">
                    <div class="address-container col">
                    SHOP THÚ CƯNG QUẬN 9 | MR.SỌ | 0909 179 979
                    </div>
                    <div class="address-container col">
                        <div class="row">
                            <div class="col-1">
                                <img src="{{URL::asset('images/icon-store.png')}}" class="icon-store" alt="logo">

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
                                <img src="{{URL::asset('images/logo-circle-y.png')}}" alt="logo-youtube" class="logo-circle">
                                <img src="{{URL::asset('images/logo-circle-f.png')}}" alt="logo-facebook" class="logo-circle">
                                <img src="{{URL::asset('images/logo-circle-g.png')}}" alt="logo-google" class="logo-circle">
                                <img src="{{URL::asset('images/logo-circle-t.png')}}" alt="logo-twitter" class="logo-circle">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid p-2">
                <div class="flex-row">
                    <div class="col-md-6">
                        <!-- Ô tìm kiếm -->
                        <form class="form-inline my-2 my-lg-0" action="{{ route('products.search') }}" method="GET">
                            <div class="flex-row">
                                <div class="input-group">
                                    <input  type="text" id="keyword" name="keyword" class="search-auto form-control" style="width:400px;"
                                        placeholder="Nhập từ khóa...">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary  text-white" type="submit"
                                            style="background-color:#DD0000;">Tìm kiếm</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-2 row">
                        <div class="col-4 d-flex align-items-center justify-content-center p-0"
                            style="background-color:rgb(240, 240, 240); border-radius:100%;">
                            <img src="{{URL::asset('images/icon-store.png')}}" class="icon-header img-fluid" alt="icon-store">
                        </div>
                        <div class="col">
                            <p style="margin-bottom:0px">Mở cửa:</p>
                            <b>7h-19h</b>
                        </div>

                    </div>
                    <div class="col-md-2 row">
                        <div class="col-4 d-flex align-items-center justify-content-center p-0"
                            style="background-color:rgb(240, 240, 240); border-radius:100%;">
                            <img src="{{URL::asset('images/icon-phone.png')}}" class="icon-header img-fluid" alt="icon-phone">
                        </div>
                        <div class="col">
                            <p style="margin-bottom:0px">Hotline:</p>
                            <b>0909179976</b>
                        </div>

                    </div>
                    <div class="col-md-2 row">
                        <div class="col-4 d-flex align-items-center justify-content-center p-0"
                            style="background-color:#DD0000; border-radius:100%;">
                            <a href="cart">
                            <img src="{{URL::asset('images/icon-shopping.png')}}" class="icon-header img-fluid" alt="icon-shopping">
                            </a>
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
    <div class="container-fluid mx-auto">
        <nav class="navbar navbar-expand-lg navbar-light justify-content-around p-0 w-100">
            <div class="row">
                <div class="col-3" style="display: grid;place-items: center;">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                </div>
                <div class="col-8">
                    <form class="form-inline my-2 my-lg-0" action="{{ route('products.search') }}" method="GET">
                        <div class="flex-row">
                            <div class="input-group">
                                <input  type="text" id="keyword" name="keyword" class="search-auto navbar-search form-control"
                                    placeholder="Nhập từ khóa...">
                            </div>
                        </div>
                    </form>
                </div>


        </div>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav d-flex justify-content-between">
                    <li class="nav-item c1 rounded active p-2">
                        <a class="nav-link" href="/">
                            <h5>TRANG CHỦ</h5>
                        </a>
                    </li>
                    <li class="nav-item c1 rounded p-2">
                        <a class="nav-link" href="/introduce">
                            <h5> GIỚI THIỆU</h5>
                        </a>
                    </li>
                    <li class="nav-item c1 rounded p-2 dropdown">
                        <a class="nav-link dropdown-toggle" href="/san-pham" id="navbarDropdown1"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <h5>SẢN PHẨM</h5>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        @foreach($category_1 as $cat1)
                            <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle rounded" href="/category1/{{$cat1->id}}" id="navbarDropdown1-1" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{$cat1->tittle}}
                                    </a>
                                @if($cat1->Category1Childrent->count())
                                <ul class="dropdown-menu-1-1 rounded" aria-labelledby="navbarDropdown1-1">
                                @foreach($cat1->Category1Childrent as $cat2)
                                    <li><a class="dropdown-item rounded" href="/category2/{{$cat2->id}}">{{$cat2->tittle}}</a></li>

                                @endforeach
                                </ul>
                                @endif
                            </li>

                        @endforeach
                        </ul>

                    </li>
                    <li class="nav-item c1 rounded p-2">
                        <a class="nav-link" href="/service">
                            <h5> DỊCH VỤ</h5>
                        </a>
                    </li>
                    <li class="nav-item c1 rounded p-2">
                        <a class="nav-link" href="/blog">
                            <h5> TIN TỨC</h5>
                        </a>
                    </li>
                    <li class="nav-item c1 rounded p-2">
                        <a class="nav-link" href="/recruitment">
                            <h5> TUYỂN DỤNG</h5>
                        </a>
                    </li>
                    <li class="nav-item c1 rounded p-2">
                        <a class="nav-link" href="/contact">
                            <h5> LIÊN HỆ</h5>
                        </a>
                    </li>
                    <!-- Thêm các mục menu khác tùy thuộc vào nhu cầu của bạn -->
                </ul>
            </div>
        </nav>
    </div>
</div>
<script>
// $(document).ready(function() {
//     $('.nav-item.dropdown').hover(
//         function() {
//             $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
//         },
//         function() {
//             $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
//         }
//     );
// });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
$(document).ready(function() {
    // Thêm lớp "show" khi hover vào dropdown để hiển thị danh sách con
    $('#navbarDropdown1-1').hover(
        function() {
            $('.dropdown-submenu').find('.dropdown-menu').addClass('show');
        },
        function() {
            $('.dropdown-submenu').find('.dropdown-menu').removeClass('show');
        }
    );
});
</script>
