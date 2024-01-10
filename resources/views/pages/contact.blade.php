@extends('layouts.master')

@section('title', 'Home')

@section('header')
    @include('partials.header')
@endsection

@section('content')
<div class="container mt-5 rounded">
        <div class="row">
            <div class="col-md-6">
                <h1>LIÊN HỆ</h1>
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
            <div class="col-md-6" >
                <img src="{{ asset('images/pets.jpg') }}" alt="Pets" class="img-fluid">
                <form method="post" action="{{ url('/contact') }}" class="needs-validation" novalidate>
                    @csrf

                    <div class="row">
                        <div class="col-md-6 mb-3">

                            <input type="text" class="form-control" name="name" placeholder="Họ và tên" required>
                            <div class="invalid-feedback">
                                Vui lòng nhập họ và tên.
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">

                            <input type="tel" class="form-control" name="phone" placeholder="Số điện thoại" required>
                            <div class="invalid-feedback">
                                Vui lòng nhập số điện thoại
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">

                            <input type="text" class="form-control" name="address" placeholder="Địa chỉ" required>
                            <div class="invalid-feedback">
                                Vui lòng nhập địa chỉ.
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">

                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                            <div class="invalid-feedback">
                                Vui lòng nhập email.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">

                        <input type="text" class="form-control" name="subject" placeholder="Chủ đề" required>
                        <div class="invalid-feedback">
                            Vui lòng nhập chủ đề.
                        </div>
                    </div>

                    <div class="mb-3">

                        <textarea class="form-control" name="message" placeholder="Nội dung" required></textarea>
                        <div class="invalid-feedback">
                           Vui lòng nhập nội dung.
                        </div>
                    </div>

                    <button type="submit" class="btn btn-danger">Gửi</button>
                </form>
            </div>
        </div>
    </div>
@endsection
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
            'use strict';

            window.addEventListener('load', function () {
                var forms = document.getElementsByClassName('needs-validation');

                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
</script>
@section('footer')
    @include('partials.footer')
@endsection
