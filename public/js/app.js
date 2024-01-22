import './bootstrap.js';

document.addEventListener("DOMContentLoaded", function() {
    const avatars = document.querySelectorAll(".avatar");
    let currentAvatarIndex = 0;

    function showNextAvatar() {
        avatars[currentAvatarIndex].classList.remove("active");

        currentAvatarIndex = (currentAvatarIndex + 1) % avatars.length;

        avatars[currentAvatarIndex].classList.add("active");
    }

    // Hiển thị avatar đầu tiên
    avatars[currentAvatarIndex].classList.add("active");

    // Tự động chuyển đổi avatar sau mỗi khoảng thời gian (ví dụ: 5 giây)
    setInterval(showNextAvatar, 5000);


});
window.$ = window.jQuery = require('jquery');
require('bootstrap');
require('slick-carousel');
$(document).ready(function() {
    $('#avatarSlider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });
});
/* Cart */
NN_FRAMEWORK.Cart = function() {
    $("body").on("click", ".addcart", function() {
        var mau = ($(".color-pro-detail input:checked").val()) ? $(".color-pro-detail input:checked").val() : 0;
        var size = ($(".size-pro-detail input:checked").val()) ? $(".size-pro-detail input:checked").val() : 0;
        if ($(".size-pro-detail").length > 0 && size == 0) {
            alert("Vui lĂ²ng chá»n thuá»™c tĂ­nh");
            return false;
        }
        var id = $(this).data("id");
        var action = $(this).data("action");
        var quantity = ($(".qty-pro").val()) ? $(".qty-pro").val() : 1;

        if (id) {
            $.ajax({
                url: 'ajax/ajax_cart.php',
                type: "POST",
                dataType: 'json',
                async: false,
                data: { cmd: 'add-cart', id: id, mau: mau, size: size, quantity: quantity },
                success: function(result) {
                    if (action == 'addnow') {
                        $('.count-cart').html(result.max);
                        $.ajax({
                            url: 'ajax/ajax_cart.php',
                            type: "POST",
                            dataType: 'html',
                            async: false,
                            data: { cmd: 'popup-cart' },
                            success: function(result) {
                                $("#popup-cart .modal-body").html(result);
                                $('#popup-cart').modal('show');
                            }
                        });
                    } else if (action == 'buynow') {
                        window.location = CONFIG_BASE + "gio-hang";
                    }
                }
            });
        }
    });

    $("body").on("click", ".del-procart", function() {
        if (confirm(LANG['delete_product_from_cart'])) {
            var code = $(this).data("code");
            var ship = $(".price-ship").val();

            $.ajax({
                type: "POST",
                url: 'ajax/ajax_cart.php',
                dataType: 'json',
                data: { cmd: 'delete-cart', code: code, ship: ship },
                success: function(result) {
                    $('.count-cart').html(result.max);
                    if (result.max) {
                        $('.price-temp').val(result.temp);
                        $('.load-price-temp').html(result.tempText);
                        $('.price-total').val(result.total);
                        $('.load-price-total').html(result.totalText);
                        $(".procart-" + code).remove();
                    } else {
                        $(".wrap-cart").html('<a href="" class="empty-cart text-decoration-none"><i class="fa fa-cart-arrow-down"></i><p>' + LANG['no_products_in_cart'] + '</p><span>' + LANG['back_to_home'] + '</span></a>');
                    }
                }
            });
        }
    });

    $("body").on("click", ".btn-cart", function() {
        $('.load-cart').addClass('load_active')
    });

    $("body").on("click", ".counter-procart", function() {
        var $button = $(this);
        var quantity = 1;
        var input = $button.parent().find("input");
        var id = input.data('pid');
        var code = input.data('code');
        var size = input.data('size');
        var oldValue = $button.parent().find("input").val();
        if ($button.text() == "+") quantity = parseFloat(oldValue) + 1;
        else if (oldValue > 1) quantity = parseFloat(oldValue) - 1;
        $button.parent().find("input").val(quantity);
        update_cart(id, code, quantity, size);
    });

    $("body").on("change", "input.quantity-procat", function() {
        var quantity = $(this).val();
        var id = $(this).data("pid");
        var code = $(this).data("code");
        var size = $(this).data("size");
        update_cart(id, code, quantity, size);
    });

    if ($(".select-city-cart").exists()) {
        $(".select-city-cart").change(function() {
            var id = $(this).val();
            load_district(id);
            load_ship();
        });
    }

    if ($(".select-district-cart").exists()) {
        $(".select-district-cart").change(function() {
            var id = $(this).val();
            load_wards(id);
            load_ship();
        });
    }

    if ($(".select-wards-cart").exists()) {
        $(".select-wards-cart").change(function() {
            var id = $(this).val();
            load_ship(id);
        });
    }

    if ($(".payments-label").exists()) {
        $(".payments-label").click(function() {
            var payments = $(this).data("payments");
            $(".payments-cart .payments-label, .payments-info").removeClass("active");
            $(this).addClass("active");
            $(".payments-info-" + payments).addClass("active");
        });
    }

    if ($(".color-pro-detail").exists()) {
        $(".color-pro-detail").click(function() {
            $(".color-pro-detail").removeClass("active");
            $(this).addClass("active");

            var id_mau = $("input[name=color-pro-detail]:checked").val();
            var idpro = $(this).data('idpro');

            $.ajax({
                url: 'ajax/ajax_color.php',
                type: "POST",
                dataType: 'html',
                data: { id_mau: id_mau, idpro: idpro },
                success: function(result) {
                    if (result != '') {
                        $('.left-pro-detail').html(result);
                        MagicZoom.refresh("Zoom-1");
                        NN_FRAMEWORK.OwlProDetail();
                    }
                }
            });
        });
    }

    if ($(".size-pro-detail").exists()) {
        $(".size-pro-detail").click(function() {
            $(".size-pro-detail").removeClass("active");
            $(this).addClass("active");
            var gia = $(this).data('gia');
            var giacu = $(this).data('giacu');
            $('.load_gia').html(gia);
            $('.load_giacu').html(giacu);
        });
    }


    if ($(".quantity-pro-detail span").exists()) {
        $(".quantity-pro-detail span").click(function() {
            var $button = $(this);
            var oldValue = $button.parent().find("input").val();
            if ($button.text() == "+") {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                if (oldValue > 1) var newVal = parseFloat(oldValue) - 1;
                else var newVal = 1;
            }
            $button.parent().find("input").val(newVal);
        });
    }
};
$(document).ready(function() {
    NN_FRAMEWORK.Cart();
});
