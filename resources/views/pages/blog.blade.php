@extends('layouts.master')

@section('title', 'Home')

@section('header')
    @include('partials.header')
@endsection

@section('content')

    <div class="container mt-3 mb-3">
        <div class="row">
            <!-- Tin 1 -->
            @foreach($blog as $bl)
            <div class="col-md-4 ">
                <div class="card blog">
                    <a href="doctin/{{$bl->link}}">
                        <img src="{{URL::asset('images/'. $bl->image)}}" class="card-img-top" alt="{{$bl->tittle}}">
                    </a>

                    <div class="card-body " >
                        <h6 class="card-title">{{$bl->tittle}}</h6>
                        <p class="card-text" style=" flex-grow: 1;max-height: 3em; overflow: hidden;">{{$bl->description}}...</p>
                        <p class="card-text"><small class="text-muted">Ngày đăng: 05/01/2024</small></p>
                        <a href="doctin/{{$bl->link}}" class="btn btn-danger">Đọc tin</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection

@section('footer')
    @include('partials.footer')
@endsection
