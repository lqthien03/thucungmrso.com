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
