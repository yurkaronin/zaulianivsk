<section class="home-screen">
  <div class="wrapper">
    <div class="home-screen__grid">
      <!-- Слайдер -->
      <div class="swiper mySwiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <?php
          include './components/repeat/home-screen-slide.php';
          include './components/repeat/home-screen-slide.php';
          ?>

        </div>

      </div>
      <!-- Блок навигации  -->
      <div class="home-screen__navigation">
        <div class="swiper-button swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button swiper-button-next"></div>
      </div>
    </div>

  </div>
</section>
