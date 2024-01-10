<!-- resources/views/cart.blade.php -->

@extends('layouts.app') <!-- Đảm bảo rằng bạn đã tạo layout blade nếu chưa có -->

@section('content')
    <div class="cart-container">
        <h2>Giỏ hàng</h2>

        <!-- Danh sách sản phẩm trong giỏ hàng -->

        <div class="cart-item" style="background-color: yellow;">
            <!-- Nội dung sản phẩm -->
        </div>

        <div class="cart-item" style="background-color: red;">
            <!-- Nội dung sản phẩm -->
        </div>

        <!-- Thông tin tổng cộng, nút thanh toán, v.v. -->
    </div>
@endsection
