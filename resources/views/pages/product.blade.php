@extends('layouts.master')

@section('title', 'Home')

@section('header')
    @include('partials.header')
@endsection

@section('content')
<main class="justify-content-center">
    <section class="container-fluid justify-content-center p-5 align-items-center">

        <div class="container-fluid ">
            <div class="row justify-content-center">
                <!-- Card Sản phẩm 1 -->
                @foreach($product as $pro)
                <div class="col-md-2 criteria">
                    <div class="card">
                        <a href="/{{$pro->link}}">
                        <img src="{{ URL::asset('images/'. $pro->image)}}" class="card-img-top p-2" alt="{{$pro->tittle}}">
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
</main>
@endsection

@section('footer')
    @include('partials.footer')
@endsection
