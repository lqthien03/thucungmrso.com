<!DOCTYPE html>
@extends('layouts.master')

@section('title', 'Home')
<link rel="stylesheet" href="{{ URL::asset('css/cart.css')}}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">
@section('header')
    @include('partials.header')
@endsection
@section('content')
    <div class="main_content main_fix clear">
        <form class="form-cart validation-cart" novalidate method="GET" action="{{ route('cart.payment') }}" enctype="multipart/form-data">
            @csrf
	        <div class="wrap-cart d-flex align-items-stretch justify-content-between">
                @php $userId = Auth::id(); @endphp
                @if($user->cartItems->count())
					<div class="top-cart">
				<p class="title-cart">Giỏ hàng của bạn:</p>
                <input type="hidden" name="user_id" value="{{ $userId }}">
				<div class="list-procart">
					<div class="procart procart-label d-flex align-items-start justify-content-between">
						<div class="pic-procart">Hình ảnh</div>
						<div class="info-procart">Tên sản phẩm</div>
						<div class="quantity-procart">
							<p>Số lượng</p>
							<p>Thành tiền</p>
						</div>
						<div class="price-procart">Thành tiền</div>
					</div>
					    @php
                        $totalAmount = 0;
                        @endphp

                        @foreach($user->cartItems as $item)
                        @if(!$item->paid)
                            @if($item->CartChildrent->count())
							@php
							$subtotal = $item->quantity * $item->CartChildrent->new_price;
							$totalAmount += $subtotal;
						    @endphp

                            <input type="hidden" name="products[{{ $item->CartChildrent->id }}][id]" value="{{ $item->CartChildrent->id }}">
                            <input type="hidden" name="products[{{ $item->CartChildrent->id }}][name]" value="{{ $item->CartChildrent->name }}">
                            <input type="hidden" name="products[{{ $item->CartChildrent->id }}][new_price]" value="{{ $item->CartChildrent->new_price }}">
                            <input type="hidden" name="products[{{ $item->CartChildrent->id }}][quantity]" value="{{ $item->quantity }}">
						<div class="procart procart-f7d58d155688dfcd2b1ed571b58d6d25 d-flex align-items-start justify-content-between">
							<div class="pic-procart">
								<a class="text-decoration-none" href="{{ $item->CartChildrent->link }}" target="_blank" title="{{ $item->CartChildrent->name }}"><img onerror="{{URL::asset('images/'.$item->CartChildrent->image )}}" src="{{URL::asset('images/'.$item->CartChildrent->image )}}" alt=" {{ $item->CartChildrent->tittle }}"></a>
								<a class="del-procart text-decoration-none" href="{{ route('removeFromCart', ['productId' => $item->CartChildrent->id]) }}" data-code="{{$item->CartChildrent->id}}">
									<i class="fa fa-times-circle"></i>
									<span>Xóa</span>
								</a>
							</div>
							<div class="info-procart">
								<h3 class="name-procart"><a class="text-decoration-none" href="{{ $item->CartChildrent->link }}" target="_blank" title=" {{ $item->CartChildrent->tittle }}"> {{ $item->CartChildrent->tittle }}</a></h3>
								<div class="properties-procart">
																												<p>Size: <strong></strong></p>
																	</div>
							</div>
							<div class="quantity-procart">
								<div class="price-procart price-procart-rp">
									<p class="price-new-cart load-price-new-f7d58d155688dfcd2b1ed571b58d6d25">
										{{ $item->CartChildrent->new_price }}.000 VNĐ									</p>
																		<p class="price-old-cart load-price-f7d58d155688dfcd2b1ed571b58d6d25">
                                                                            {{ $item->CartChildrent->old_price }}.000 VNĐ									</p>
																	</div>
				                <div class="quantity-counter-procart quantity-counter-procart-f7d58d155688dfcd2b1ed571b58d6d25 d-flex align-items-stretch justify-content-between" data-id="{{ $item->id }}">
			                        <span class="counter-procart-minus counter-procart">-</span>
			                        <input type="number" class="quantity-procat" min="1" value="{{$item->quantity}}" data-pid="{{$item->id}}" data-code="f7d58d155688dfcd2b1ed571b58d6d25" data-size="31"/>
			                        <span class="counter-procart-plus counter-procart">+</span>
			                    </div>
				                <div class="pic-procart pic-procart-rp">
									<a class="text-decoration-none" href="{{ $item->CartChildrent->link }}" target="_blank" title="{{ $item->CartChildrent->tittle }}"><img onerror="{{URL::asset('images/'.$item->CartChildrent->image )}}" src="{{URL::asset('images/'.$item->CartChildrent->image )}}" alt="{{ $item->CartChildrent->tittle }}"></a>
									<a class="del-procart text-decoration-none" data-code="{{ $item->CartChildrent->id}}" data-size="31">
										<i class="fa fa-times-circle"></i>
										<span>Xóa</span>
									</a>
								</div>
							</div>
							<div class="price-procart">
									<p class="price-new-cart load-price-new-f7d58d155688dfcd2b1ed571b58d6d25">
										{{ $item->CartChildrent->new_price * $item->quantity}}.000 VNĐ							</p>
																		<p class="price-old-cart load-price-f7d58d155688dfcd2b1ed571b58d6d25">
                                                                            {{ $item->CartChildrent->old_price * $item->quantity}}.000 VNĐ									</p>
																</div>
						</div>
                            @endif
                            @endif
                        @endforeach

			        				</div>

		        <div class="money-procart">
				    			        			        <div class="total-procart d-flex align-items-center justify-content-between">
			        	<p>Tổng tiền:

                        <input type="hidden" name="total_amount" value="{{ $item->CartChildrent->sum('new_price') * $item->quantity}}">
			        	<p class="total-price load-price-total">{{$totalAmount}}.000 VNĐ</p>
			        </div>
			        <input type="hidden" class="price-temp" name="price-temp" value="250000">
			        <input type="hidden" class="price-ship" name="price-ship">
	                <input type="hidden" class="price-total" name="price-total" value="250000">
		        </div>
		    </div>
            @else
                @if($user->UserOrder->count())
                <div class="top-cart">
                    <p class="title-cart">Sản phẩm đã đặt</p>
                    <p class="text-center"><i> Giỏ hàng của bạn trống </i></p>
                </div>
                @else
            <div class="top-cart">
                <div class="main_fix clear">
                    <form class="form-cart validation-cart" novalidate="" method="post" action="" enctype="multipart/form-data">
                <div class="wrap-cart d-flex align-items-stretch justify-content-between">
                                <a href="" class="empty-cart text-decoration-none">
                            <i class="fa fa-cart-arrow-down"></i>
                            <p>Không tồn tại sản phẩm nào trong giỏ hàng !</p>
                            <span>Về trang chủ</span>
                        </a>
                        </div>
            </form>    </div>
            </div>
                @endif
            @endif
		    <div class="bottom-cart">
		    	<div class="load-cart"></div>
			    <div class="section-cart">
		    		<p class="title-cart">Hình thức thanh toán:</p>
			    	<div class="information-cart">
			    					    			<div class="payments-cart custom-control custom-radio">
								<input type="radio" class="custom-control-input" id="payments-12" name="payments" value="12" required>
								<label class="payments-label custom-control-label" for="payments-12" data-payments="12">Thanh toán tại điểm giao hàng</label>
								<div class="payments-info payments-info-12 transition"><p>- Quý khách thanh toán cho nhân viên giao nhận toàn bộ hoặc phần còn lại của giá trị đơn hàng đã mua (nếu đã đặt cọc)</p>

<p>- Nếu địa điểm giao hàng ngay tại nơi thanh toán, nhân viên giao hàng của chúng tôi sẽ thu tiền khi giao hàng.</p>
</div>
							</div>
			    					    			<div class="payments-cart custom-control custom-radio">
								<input type="radio" class="custom-control-input" id="payments-13" name="payments" value="13" required>
								<label class="payments-label custom-control-label" for="payments-13" data-payments="13">Thanh toán bằng chuyển khoản</label>
								<div class="payments-info payments-info-13 transition"><p><strong>CÔNG TY TNHH CÔNG NGHỆ VIỄN THÔNG TÍN NGHĨA</strong></p>

<p><strong>STK : 0315591934</strong></p>

<p>Chi nhánh: 7/102A Đường Liên khu 5-6, KP 9, P. BHH B, Bình Tân, TP.HCM</p>
</div>
							</div>
			    					    	</div>
			    	<p class="title-cart">Thông tin giao hàng:</p>
			    	<div class="information-cart">
			    		<div class="input-double-cart clear">
			    			<div class="input-cart">
				                <input type="text" class="form-control" id="ten" name="ten" placeholder="Họ tên" required />
				                <div class="invalid-feedback">Vui lòng nhập họ và tên</div>
				            </div>
				            <div class="input-cart">
				                <input type="number" class="form-control" id="dienthoai" name="dienthoai" placeholder="Số điện thoại" required />
				                <div class="invalid-feedback">Vui lòng nhập số điện thoại</div>
				            </div>
			    		</div>
			            <div class="input-cart">
			                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required />
			                <div class="invalid-feedback">Vui lòng nhập địa chỉ email</div>
			            </div>
			            <div class="input-triple-cart clear">
			            	<div class="input-cart">
								<select class="select-city-cart custom-select" required id="province" name="city">
									<option value="">Tỉnh/thành phố</option>

																	</select>
								<div class="invalid-feedback">Vui lòng chọn tỉnh thành</div>
			            	</div>
			            	<div class="input-cart">
								<select class="select-district-cart select-district custom-select" required id="district" name="district">
									<option value="">Quận/huyện</option>
								</select>
								<div class="invalid-feedback">Vui lòng chọn quận huyện</div>
							</div>
							<div class="input-cart">
								<select class="select-wards-cart select-wards custom-select" required id="ward" name="wards">
									<option value="">Phường/xã</option>
								</select>
								<div class="invalid-feedback">Vui lòng chọn phường xã</div>
							</div>
						</div>
						<div class="input-cart">
			                <input type="text" class="form-control" id="diachi" name="diachi" placeholder="Địa chỉ" required />
			                <div class="invalid-feedback">Vui lòng nhập địa chỉ</div>
			            </div>
						<div class="input-cart">
			                <textarea class="form-control" id="yeucaukhac" name="yeucaukhac" placeholder="Yêu cầu khác (không bắt buộc)" /></textarea>
			            </div>
			    	</div>
		    		<input type="submit" class="btn-cart btn btn-primary btn-lg btn-block" name="thanhtoan" value="Thanh toán">
			    </div>
		    </div>
			</div>
</form>    </div>
@endsection
@section('footer')
    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js"  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ URL::asset('js/api.js')}}"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Sự kiện khi nút "Thanh toán" được nhấn
        document.querySelector('.validation-cart').addEventListener('submit', function(event) {
            event.preventDefault();

            // Thu thập thông tin từ form
            const formData = new FormData(this);
            console.log(formData);
            // Gọi API thanh toán
            axios.post('/payment', formData)
                .then(response => {
                    console.log('Payment successful. Payment ID:', response.data.payment_id);
                    // Redirect hoặc thực hiện các thao tác tiếp theo
                    alert('Đặt hàng thành công!');

                    window.location.href = '/cart';
                })
                .catch(error => {
                    console.error('Error processing payment:', error.response.data);
                    // Xử lý lỗi hoặc hiển thị thông báo cho người dùng
                });
                const paymentMethod = formData.get('payments');

// Thực hiện các thao tác tùy thuộc vào giá trị của paymentMethod
if (paymentMethod === '12') {
    // Thanh toán tại điểm giao hàng
    console.log('Chọn thanh toán tại điểm giao hàng');
} else if (paymentMethod === '13') {
    // Thanh toán bằng chuyển khoản
    console.log('Chọn thanh toán bằng chuyển khoản');
}
        });
        document.querySelectorAll('.quantity-procart input').forEach(function(input) {
            input.addEventListener('change', function() {
                updateTotalAmount();
            });
        });

        // Hàm cập nhật tổng cộng tiền
        function updateTotalAmount() {
            const totalAmountElement = document.querySelector('.total-price');
            const quantityElements = document.querySelectorAll('.quantity-procat input');
            const priceElements = document.querySelectorAll('.price-new-cart');

            let totalAmount = 0;

            // Tính tổng cộng tiền dựa trên số lượng và giá của mỗi sản phẩm
            quantityElements.forEach(function(quantityElement, index) {
                const quantity = parseInt(quantityElement.value);
                const price = parseFloat(priceElements[index].innerText.replace(',', '')); // Chuyển đổi giá từ chuỗi có dấu ',' sang số

                totalAmount += quantity * price;
            });

            // Hiển thị tổng cộng tiền
            totalAmountElement.innerText = formatCurrency(totalAmount);
        }

        // Hàm định dạng số tiền thành chuỗi có dấu ',' phân cách hàng nghìn
        function formatCurrency(amount) {
            return amount.toFixed(0).replace(/\d(?=(\d{3})+$)/g, '$&,') + ' VND';
        }
    });
</script>
<script>
    $(document).ready(function() {
        // Bắt sự kiện khi người dùng nhấp vào nút "Xóa"
        $('.del-procart').on('click', function() {
            // Lấy mã sản phẩm từ thuộc tính data-code
            var productCode = $(this).data('id');

            // Lấy CSRF token từ thẻ meta trong trang
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            // Gửi yêu cầu xóa đến máy chủ thông qua Ajax với CSRF token
            $.ajax({
                type: 'POST',
                url: '/remove-from-cart',
                data: {
                    'product_code': productCode,
                    '_token': csrfToken, // Thêm CSRF token vào dữ liệu gửi đi
                },
                success: function(response) {
                    // Xử lý phản hồi từ máy chủ (nếu cần)
                    console.log(response);

                    // Cập nhật giao diện hoặc làm bất kỳ điều gì khác nếu cần
                    // Ví dụ: Xóa sản phẩm khỏi DOM
                    $(this).closest('.cart-item').remove();
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function () {
        // Sự kiện khi radio button được chọn
        $('input[type="radio"]').change(function () {
            // Ẩn tất cả các phần thông tin thanh toán
            $('.payments-info').removeClass('active');

            // Lấy giá trị của radio button được chọn
            var selectedPayment = $('input[name="payments"]:checked').val();

            // Hiển thị phần thông tin thanh toán tương ứng
            $('#payments-info-' + selectedPayment).addClass('active');
        });
    });
</script>
<script>
    $('.counter-procart-minus, .counter-procart-plus').on('click', function() {
    // Lấy ID của item trong giỏ hàng và số lượng mới
    var cartItemId = $(this).closest('.quantity-counter-procart').data('id');
    var quantityInput = $(this).siblings('.quantity-procat');
    var newQuantity = parseInt(quantityInput.val()) + ($(this).hasClass('counter-procart-plus') ? 1 : -1);
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    // Gửi dữ liệu đến server
    $.ajax({
        method: 'POST',
        url: '/update-cart-item',
        data: {
            cart_item_id: cartItemId,
            new_quantity: newQuantity
        },
        success: function(response) {
            if (response.success) {
                // Cập nhật số lượng và thành tiền trong giao diện
                quantityInput.val(response.new_quantity);
                updateTotalPrice(cartItemId, response.new_total_price);
            } else {
                // Xử lý lỗi từ server
            }
        },
        error: function() {
            // Xử lý lỗi kết nối
        }
    });
});

// Hàm cập nhật tổng thành tiền
function updateTotalPrice(cartItemId, newTotalPrice) {
    // Cập nhật thành tiền theo ID của item trong giỏ hàng
    // Đặt logic hiển thị/ẩn sản phẩm nếu cần thiết
}

</script>
@endsection
