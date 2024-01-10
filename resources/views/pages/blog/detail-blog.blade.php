@extends('layouts.master')

@section('title', 'Home')

@section('header')
    @include('partials.header')
@endsection

@section('content')
<main class="justify-content-center">
    <div class="container mt-3 mb-3">
        <!-- Phần nội dung tin tức -->
        <div class="row">

            <div class="col-md-8">
                <h3 class="mb-3">{{$detail->tittle}}</h3>
                <!-- Hình ảnh tin tức -->
                <img src="{{URL::asset('images/'. $detail->image)}}" class="img-fluid" alt="{{$detail->tittle}}">

                <!-- Mô tả và nội dung tin tức -->
                <p class="mt-3">Ngày đăng: 05/01/2024</p>
                <p>{{$detail->content}}</p>
            </div>

            <!-- Cột phải có thể chứa các thông tin bổ sung như ngày đăng, tác giả, danh mục, v.v. -->
            <div class="col-md-4">
                <h5 class="mb-3">Tin Tức Liên Quan</h5>
                <!-- Danh sách tin tức liên quan -->
                <div class="list-group">
                    <!-- Tin tức liên quan 1 -->
                    @foreach($blog as $bl)
                    <a href="/doctin/{{$bl->link}}" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <img src="{{URL::asset('images/'. $bl->image)}}" alt="{{$bl->tittle}}" class="mr-3" style="max-width: 100px;max-height:120px;">
                            <div class="flex-grow-1">
                                <h5 class="mb-1">{{$bl->tittle}}</h5>
                                <p class="mb-1" style=" flex-grow: 1;max-height: 3em; overflow: hidden;">{{$bl->description}}</p>
                            </div>
                        </div>
                    </a>
                    @endforeach


                    <!-- Thêm tin tức liên quan khác tùy thuộc vào nhu cầu của bạn -->
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('footer')
    @include('partials.footer')
@endsection
