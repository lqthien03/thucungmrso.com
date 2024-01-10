@extends('layouts.master')

@section('title', 'Home')

@section('header')
@include('partials.header')
@endsection


@section('content')
<!-- <div class="pet-banner">

    <img src="{{ URL::asset('images/banner2.jpeg') }}" alt="Pet Image" class="pet-image">


    <div class="overlay">

        <div class="banner-content">
            <p style="margin-bottom:0px;">Hãy cùng chúng tôi mang lại điều tuyệt vời
                nhất cho động vật của bạn!</p>
        </div>
    </div>
</div> -->
@include('slider')
@foreach ($products as $product)
        <script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "Product",
                "name": "{{ $product->name }}",
                "image": "{{ $product->image }}",
                "description": "{{ $product->description }}",
                "brand": {
                    "@type": "Brand",
                    "name": "{{ $product->brand }}"
                },
                "offers": {
                    "@type": "Offer",
                    "priceCurrency": "VND",
                    "price": "{{ $product->price }}",
                    "availability": "http://schema.org/InStock"
                }
            }
        </script>
    @endforeach
<main class="justify-content-center">
    <section class="container-fluid justify-content-center p-1 align-items-center">
        <div class="row justify-content-center pb-4">
            <button class="btn new-product col-4" onclick="showProducts('new')"> <i
                    class="fas fa-star text-warning"></i> SẢN PHẨM MỚI</button>
            <button class="btn best-seller col-4" onclick="showProducts('best')"> <i
                class="fas fa-star text-warning"></i>SẢN PHẨM BÁN CHẠY</button>
        </div>
        <div class="container-fluid " id="newProducts">
            <div class="row justify-content-center">
                <!-- Card Sản phẩm 1 -->
                @foreach($new as $pro)
                <div class="col-md-2 card-sp newproduct">
                    <div class="card">
                        <a href="/{{$pro->link}}">
                            <img src="{{ URL::asset('images/'. $pro->image)}}" class="card-img-top p-2" alt="Sản phẩm 1">
                        </a>
                        <div class="card-body p-2">
                            <b class="card-title">{{$pro->tittle}}</b>


                            <div class="row justify-content-center gr-button">
                                @if($pro->category2()->count())

                                <h6 class="text-primary">{{$pro->category2->tittle}}</h6>

                                @endif
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
                @endforeach


                <!-- Thêm các card sản phẩm khác tương tự -->
            </div>
        </div>
        <div class="container-fluid " id="bestSellerProducts" style="display:none;">
            <div class="row justify-content-center">
                <!-- Card Sản phẩm 1 -->
                @foreach($new as $pro)
                <div class="col-md-2 card-sp newproduct">
                    <div class="card">
                        <a href="/{{$pro->link}}">
                            <img src="{{ URL::asset('images/'. $pro->image)}}" class="card-img-top p-2" alt="Sản phẩm 1">
                        </a>
                        <div class="card-body p-2">
                            <b class="card-title">{{$pro->tittle}}</b>


                            <div class="row justify-content-center gr-button">
                                @if($pro->category2()->count())

                                <h6 class="text-primary">{{$pro->category2->tittle}}</h6>

                                @endif
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
                @endforeach
                <!-- Thêm các card sản phẩm khác tương tự -->
            </div>
        </div>
    </section>

    <script>
    function showProducts(category) {
        if (category === 'new') {
            $('#newProducts').show();
            $('#bestSellerProducts').hide();
        } else if (category === 'best') {
            $('#newProducts').hide();
            $('#bestSellerProducts').show();
        }
    }
    </script>
    <section class="container-fluid justify-content-center p-5">
        <h2 class="title-main tc text-danger"><span><b> SHOP CHO CHÓ </b></span></h2>
        <p class="sltc">SHOP THÚ CƯNG MR SỌ chuyên thức ăn cho thú cưng, thuốc cho thú cưng, phụ kiện cho thú cưng</p>
        <div class="row justify-content-center">
            <div class="col-md-2 menu-left">
                <div class="bg-warning shopchochocho pb-5 mb-3">
                    <div class="shopchocho p-1" style="background-color:#DD0000;">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <img src="{{ URL::asset('images/Hinh-icon-cho-Shiba.jpg')}}"
                                    style="object-fit: cover;width:100%" class="rounded-circle" alt="Shop cho chó">
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
                <div class=" shopchochocho pb-5 mb-3">
                    <img class="banner-doc" src="{{ URL::asset('images/banner-left.jpg')}}" alt="Shop cho chó">
                </div>

            </div>
            <div class="col-md-10">
                <div class="row justify-content-center">
                    @foreach($fordog as $fd)
                    <div class="col-md-3 p-2 card-sp">
                        <div class="card">
                            <a href="/{{$fd->link}}"><img src="{{ URL::asset('images/'. $fd->image)}}" class="card-img-top p-2" alt="Sản phẩm 1"></a>

                            <div class="card-body p-2">
                                <b class="card-title">{{$fd -> tittle}}</b>


                                <div class="row justify-content-center gr-button">
                                    @if($fd->category2()->count())

                                    <h6 class="text-primary">{{$fd->category2->tittle}}</h6>

                                    @endif
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
                    @endforeach

                    <!--  -->
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <h2 class="title-main tc text-danger"><span><b> SHOP CHO MÈO </b></span></h2>
        <p class="sltc">SHOP THÚ CƯNG MR SỌ chuyên thức ăn cho thú cưng, thuốc cho thú cưng, phụ kiện cho thú cưng</p>
            <div class="col-md-2 menu-left">
                <div class="bg-warning shopchochocho pb-5 mb-3">
                    <div class="shopchocho p-1" style="background-color:#DD0000;">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <img src="{{ URL::asset('images/Hinh-icon-cho-Shiba.jpg')}}"
                                    style="object-fit: cover;width:100%" class="rounded-circle" alt="Shop cho mèo">
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
                <div class=" shopchochocho pb-5 mb-3">
                    <img class="banner-doc" src="{{ URL::asset('images/banner-left.png')}}" alt="Shop cho mèo">
                </div>
            </div>
            <div class="col-md-10">
                <div class="row justify-content-center">
                    @foreach($forcat as $fc)
                    <div class="col-md-3 p-2 card-sp">
                        <div class="card">
                            <a href="/{{$fc->link}}">
                            <img src="{{ URL::asset('images/'. $fc->image)}}" class="card-img-top p-2" alt="{{$fc->tittle}}">
                            </a>
                            <div class="card-body p-2">
                                <b class="card-title">{{$fc -> tittle}}</b>


                                <div class="row justify-content-center gr-button">
                                    @if($fc->category2()->count())

                                    <h6 class="text-primary">{{$fc->category2->tittle}}</h6>

                                    @endif
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
                    @endforeach

                </div>
            </div>
                </div>
                <div class="row justify-content-center">
                    <h2 class="title-main tc text-danger"><span><b> SHOP CHO GÀ </b></span></h2>
                <p class="sltc">SHOP THÚ CƯNG MR SỌ chuyên thức ăn cho thú cưng, thuốc cho thú cưng, phụ kiện cho thú cưng</p>
                    <div class="col-md-2 menu-left">
                        <div class="bg-warning shopchochocho pb-5 mb-3">
                            <div class="shopchocho p-1" style="background-color:#DD0000;">
                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <img src="{{ URL::asset('images/Hinh-icon-cho-Shiba.jpg')}}"
                                            style="object-fit: cover;width:100%" class="rounded-circle" alt="Shop cho gà">
                                    </div>
                                    <div class="col-md-9 text-white">
                                        <p class="mb-0">SHOP CHO GÀ</p>
                                    </div>
                                </div>

                            </div>
                            <ul class="pt-3">
                                <li><a href="">Thức ăn cho gà</a></li>
                                <li><a href="">Thuốc cho gà</a></li>
                                <li><a href="">Phụ kiện cho gà</a></li>
                            </ul>

                        </div>
                        <div class=" shopchochocho pb-5 mb-3">
                            <img class="banner-doc" src="{{ URL::asset('images/banner-left.png')}}" alt="Shop cho gà">
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="row justify-content-center">
                            @foreach($forchick as $fc)
                            <div class="col-md-3 p-2 card-sp">
                                <div class="card">
                                    <a href="/{{$fc->link}}">
                                    <img src="{{ URL::asset('images/'. $fc->image)}}" class="card-img-top p-2" alt="{{$fc->tittle}}">
                                    </a>
                                    <div class="card-body p-2">
                                        <b class="card-title">{{$fc->tittle}}</b>


                                        <div class="row justify-content-center gr-button">
                                            @if($fc->category2()->count())

                                            <h6 class="text-primary">{{$fc->category2->tittle}}</h6>

                                            @endif
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
                            @endforeach

                        </div>
                    </div>
                        </div>
    </section>

    <!-- section banner -->
    <section class="container-fluid justify-content-center p-2">
        <div class="row mx-auto justify-content-center banner2">
            <div class="col-md-6">

                    <img src="{{ URL::asset('images/for-dog.png')}}" class="card-img-top" alt="Banner 1">
                    <!-- Thêm nội dung cho banner 1 nếu cần -->

            </div>
            <div class="col-md-6">

                    <img src="{{ URL::asset('images/for-dog.png')}}" class="card-img-top" alt="Banner 2">
                    <!-- Thêm nội dung cho banner 2 nếu cần -->

            </div>

        </div>
    </section>

    <!-- section sp -->
    <section class="container-fluid justify-content-center p-5">
        <div class="row justify-content-center">
            <div class="col-md-2 menu-left">
                <div class="bg-warning shopchochocho pb-5 mb-3">
                    <div class="shopchocho p-1" style="background-color:#DD0000;">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <img src="{{ URL::asset('images/Hinh-icon-cho-Shiba.jpg')}}"
                                    style="object-fit: cover;width:100%" class="rounded-circle" alt="Sản phẩm lúa gạo">
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
                <div class=" shopchochocho pb-5 mb-3">
                    <img class="banner-doc" src="{{ URL::asset('images/banner-left-gao.png')}}" alt="Sản phẩm lúa gạo">
                </div>
            </div>
            <div class="col-md-10">
                <div class="row justify-content-center">
                    @foreach($forrice as $fr)
                    <div class="col-md-3 card-sp p-2">
                        <div class="card">
                            <img src="{{ URL::asset('images/'. $fr->image)}}" class="card-img-top p-2" alt="Sản phẩm 1">
                            <div class="card-body p-2">
                                <b class="card-title">{{$fr -> tittle}}</b>


                                <div class="row justify-content-center gr-button">
                                    @if($fr->category2()->count())

                                    <h6 class="text-primary">{{$fr->category2->tittle}}</h6>

                                    @endif
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
                    @endforeach

                    <!--  -->
                </div>
            </div>
        </div>
    </section>

    <!-- section vattunongnghiep  -->
    <section class="container-fluid justify-content-center p-2">
        <div class="col-md-2 menu-left justify-content-center vattunongnghiep">
            <div class="shopchocho p-1" style="background-color:#DD0000;">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <img src="{{ URL::asset('images/Hinh-icon-cho-Shiba.jpg')}}"
                            style="object-fit: cover;width:100%" class="rounded-circle" alt="Vật tư nông nghiệp">
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
                @foreach($forfarm as $ff)
                <div class="col-md-2 card-sp">
                    <div class="card">
                        <img src="{{ URL::asset('images/'. $ff->image)}}" class="card-img-top p-2"
                            alt="{{$ff->tittle}}">
                        <div class="card-body p-2">
                            <b class="card-title">{{$ff->tittle}}</b>


                            <div class="row justify-content-center">
                                @if($fr->category2()->count())

                                    <h6 class="text-primary">{{$fr->category2->tittle}}</h6>

                                    @endif
                                <div class="col">
                                    <p class="card-text" style="margin-bottom:2px;color:#BBBBBB	;"><s>{{$ff->old_price}}
                                            vnđ</s>
                                    </p>
                                    <p class="card-text text-danger" style="font-weight:bolder;font-size:18px;">
                                        {{$ff->new_price}} vnđ</p>
                                </div>
                                <div class="col"><button class="btn btn-danger">Giỏ hàng</button></div>
                            </div>


                        </div>
                    </div>
                </div>
                @endforeach
                <!--  -->
                <!-- Thêm các card sản phẩm khác tương tự -->
            </div>
            <!--

         -->
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-2 partner-logo">
                        <img src="{{ URL::asset('images/logo-doi-tac.png')}} " alt="Đối tác" class="card-img">
                    </div>
                    <div class="col-md-2 partner-logo">
                        <img src="{{ URL::asset('images/logo-doi-tac.png')}} " alt="Đối tác" class="card-img">
                    </div>
                    <div class="col-md-2 partner-logo">
                        <img src="{{ URL::asset('images/logo-doi-tac.png')}} " alt="Đối tác" class="card-img">
                    </div>
                    <div class="col-md-2 partner-logo">
                        <img src="{{ URL::asset('images/logo-doi-tac.png')}} " alt="Đối tác" class="card-img">
                    </div>
                    <div class="col-md-2 partner-logo">
                        <img src="{{ URL::asset('images/logo-doi-tac.png')}} " alt="Đối tác" class="card-img">
                    </div>

                </div>
            </div>
            <!--  -->


        </div>
    </section>
    <!-- -->
    <div class="container-fluid text-white" style="background-color:#DD0000;">
        <div class="row justify-content-around p-5">
            <div class="col-md-3 criteria">
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <img src="{{ URL::asset('images/icon-diamond.png') }}" style="width:100%;" alt="Uy tín">
                    </div>
                    <div class="col-md-8">
                        <h5>UY TÍN HÀNG ĐẦU</h5>
                        <p>Lorem Ipsum chỉ đơn giản là một đoạn văn giả</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 justify-content-center criteria">
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <img src="{{ URL::asset('images/logo-24-7.png') }}" style="width:100%;" alt="Hỗ trợ">
                    </div>
                    <div class="col-md-8">
                        <h5>HỖ TRỢ 24/7</h5>
                        <p>Lorem Ipsum chỉ đơn giản là một đoạn văn giả</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 justify-content-center criteria">
                <div class="row justify-content-center">
                    <div class="col-md-3 ">
                        <img src="{{ URL::asset('images/thanhtoandedang.png') }}" style="width:100%;" alt="Thanh toán">
                    </div>
                    <div class="col-md-8">
                        <h5>THANH TOÁN DỄ DÀNG</h5>
                        <p>Lorem Ipsum chỉ đơn giản là một đoạn văn giả</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 justify-content-center criteria">
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <img src="{{ URL::asset('images/pig2.png') }}" style="width:100%;" alt="Tiết kiệm">
                    </div>
                    <div class="col-md-8">
                        <h5>MUA HÀNG TIẾT KIỆM</h5>
                        <p>Lorem Ipsum chỉ đơn giản là một đoạn văn giả</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <section class="container-fluid justify-content-center d-flex align-items-center p-5 blog">
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
                    @foreach($blog as $bl)
                    <div class="blog-post row pb-2" style="height:200px; overflow:hidden;">
                        <div class="col-5">
                            <a href="doctin/{{$bl->link}}">
                            <img src="{{URL::asset('images/'. $bl->image)}}" alt="Blog Post Image"
                                class="img-fluid w-100 p-1">
                            </a>
                        </div>
                        <div class="col-7">
                            <div class="blog-post-content" style="">
                                <h3>{{$bl->tittle}}</h3>
                                <p style="overflow: hidden;text-overflow:ellipsis;">{{$bl->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--  -->

                </div>
            </div>
            <div class="col-md-6">
                <div class="container" >
                    <div class="tittle-blog">
                        <h2 class="">Cảm Nhận Khách Hàng</h2>
                        <p>Lorem chỉ đơn giản là một đoạn văn giả</p>
                    </div>
                    <div class="container bg-warning">
                        <!--  -->
                        <div class="swiper-container-user pt-3 pb-3" style="overflow: hidden;">
                            <div class="swiper-wrapper">

                                @foreach($user_comment as $uc)
                                <div class="swiper-slide bg-warning swiper-slide-user">
                                    <img src="{{ asset('images/' . $uc->image) }}"  alt="Avatar"
                                        class="rounded-circle img-fluid slide-avatar">
                                    @if($uc->UserChildrent->count())
                                    @foreach($uc->UserChildrent as $c)
                                    <p>{{$c->content}}</p>
                                    @endforeach
                                    @endif
                                    <b>{{$uc->name}}</b>
                                </div>
                                @endforeach
                            </div>

                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>

                        <!--  -->
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="container-fluid justify-content-center d-flex align-items-center p-5 mt-5 video">
        <div class="row justify-content-center">
            <div class="col-md-4 p-3">
                <video class="img-fluid w-100" controls>
                    <source src="{{URL::asset('images/dog.mp4')}}" type="video/mp4">
                </video>
                <p>Lorem chỉ đơn giản là một đoạn văn giả, được dùng vào việc trình bày</p>
            </div>
            <div class="col-md-4 p-3">
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


@endsection

@section('footer')
@include('partials.footer')
@endsection
