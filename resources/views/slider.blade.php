<div class="swiper-container pet-banner">
    <div class="swiper-wrapper">
        @foreach($banner as $ba)
        <div class="swiper-slide">
            <!-- Hình ảnh thú cưng -->
            <img src="{{ URL::asset('images/'. $ba->image) }}" alt="Pet Image" class="pet-image">

            <!-- Nội dung bên trong banner -->
            <div class="overlay">
                <!-- Nội dung bên trong overlay -->
                <div class="banner-content">
                    <p style="margin-bottom:0px;">Hãy cùng chúng tôi mang lại điều tuyệt vời nhất cho động vật của bạn!</p>
                </div>
            </div>
        </div>
        @endforeach
        <!-- Add more slides if needed -->
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Navigation -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->    <script>

</script>
<!-- <script>
  var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

</script> -->
<script>
    var swiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true, // Enable looping
        speed:1000,

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        // Autoplay
        autoplay: {
            delay: 3000, // Delay between transitions in milliseconds (5 seconds in this example)
            disableOnInteraction: false, // Enable autoplay even if the user interacts with the swiper
        },
    });
</script>
