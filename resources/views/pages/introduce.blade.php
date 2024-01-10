@extends('layouts.master')

@section('title', 'Home')

@section('header')
    @include('partials.header')
@endsection

@section('content')
<div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h1>Chào mừng bạn đến với Mr SỌ</h1>
                <p>
                    We offer a wide range of pet supplies, including food, accessories, and more.
                    Our mission is to provide the best products for your furry friends.
                </p>
                <p>
                    Explore our website to find high-quality items for your pets. If you have any
                    questions, feel free to contact our friendly team.
                </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta incidunt dolor quis. Fugiat provident recusandae deleniti, illum architecto minima expedita omnis, sunt pariatur ex magni? Delectus provident numquam beatae itaque.</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/pets.jpg') }}" alt="Pets" class="img-fluid">
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('partials.footer')
@endsection