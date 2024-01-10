@extends('layouts.master')

@section('title', 'Home')

@section('header')
    @include('partials.header')
@endsection

        <script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "Product",
                "name": "{{ $detail->name }}",
                "image": "{{ $detail->image }}",
                "description": "{{ $detail->description }}",
                "brand": {
                    "@type": "Brand",
                    "name": "{{ $detail->brand }}"
                },
                "offers": {
                    "@type": "Offer",
                    "priceCurrency": "VND",
                    "price": "{{ $detail->price }}",
                    "availability": "http://schema.org/InStock"
                }
            }
        </script>

@section('content')
<main class="justify-content-center">

    <section class="container-fluid justify-content-center p-5 align-items-center">
        <div class="container product-details">
            <div class="row">
              <div class="col-md-6">
                <img src="{{ URL::asset('images/'. $detail->image)}}" alt="Product Image" class="product-image-container product-image">
              </div>
              <div class="col-md-6">
                <h2>{{$detail->tittle}}</h2>
                @if($detail->category2()->count())
                <p class="text-muted">{{$detail->category2->tittle}}</p>
                @endif
                <p>{{$detail->description}}</p>
                <h4>{{$detail->new_price}} VNĐ</h4>
                <button class="btn btn-danger">Thêm vào giỏ hàng</button>
                <div class="content">
                    <p>Mèo từ 1-6 tuổi cần có nhiều thời gian vui chơi và chế độ ăn uống cân bằng để luôn giữ được vóc dáng cân đối, khỏe mạnh. Mèo là loài ăn thịt trong khi con người là loài ăn tạp, vì vậy nhu cầu protein của mèo cao gấp 2 lần của chúng ta. Mèo cũng cần 41 dưỡng chất thiết yếu để có sức khỏe tối ưu. Hiểu rõ nhu cầu dinh dưỡng của mèo, WHISKAS luôn thiết kế các sản phẩm với công thức đặc biệt để mang lại hệ dưỡng chất toàn diện và cân bằng.

                        Công thức đặc biệt dành cho mèo từ 1 tuổi trở lên.
                        Bổ sung chất béo omega 3 & 6 và kẽm cho bộ lông khỏe mạnh và bóng mượt.
                        Kết hợp thêm vitamin A và taurine cho thị lực khỏe mạnh.
                        Giàu protein từ cá thật, bao gồm chất béo, vitamin và khoáng chất, giúp bé mèo phát triển cân đối và luôn vui vẻ.
                        Chứa chất chống oxy hóa (vitamin E và selen) cho hệ miễn dịch khỏe mạnh.</p>
                </div>

              </div>
            </div>
          </div>
    </section>
    <div class="container mt-5">
        <div class="shopchocho spcungloai p-1" style="background-color:#DD0000;">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <img src="{{ URL::asset('images/Hinh-icon-cho-Shiba.jpg')}}"
                        style="object-fit: cover;width:100%" class="rounded-circle" alt="Sản phẩm cùng loại">
                </div>
                <div class="col-md-9 p-1 text-white">
                    <p class="mb-0">SẢN PHẨM CÙNG LOẠI</p>
                </div>
            </div>

        </div>
    </div>
    <div class="container product-details">
        <div class="swiper-container-product">
          <div class="swiper-wrapper">
            <!-- Product 1 -->
            @foreach($spcungloai as $cu)
            <div class="swiper-slide slide-product">
                    <div class="card card-sp">
                        <a href="/{{$cu->link}}">
                        <img src="{{ URL::asset('images/'. $cu->image)}}" class="card-img-top p-2" alt="{{$cu->tittle}}">
                        </a>
                        <div class="card-body p-2">
                            <b class="card-title">{{$cu -> tittle}}</b>


                            <div class="row justify-content-center gr-button">
                                @if($cu->category2()->count())

                                <h6 class="text-primary">{{$cu->category2->tittle}}</h6>

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

</main>
@endsection

@section('footer')
    @include('partials.footer')
@endsection
