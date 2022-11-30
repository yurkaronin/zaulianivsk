<section class="home-screen">
  <div class="wrapper">
    <div class="home-screen__grid">
      <div class="home-screen__slider">

        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <!-- Slides -->
            <?php
            include './components/repeat/home-screen-slide.php';
            include './components/repeat/home-screen-slide.php';
            include './components/repeat/home-screen-slide.php'
            ?>

          </div>
        </div>
      </div>

      <div class="home-screen__navigation">
        <div class="swiper-button swiper-button-prev">
          <svg width="26" height="15" viewBox="0 0 26 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.999999 14L12.6364 2L25 14" stroke="white" stroke-width="2" />
          </svg>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button swiper-button-next">
          <svg width="26" height="15" viewBox="0 0 26 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M25 1L13.3636 13L0.999999 1" stroke="white" stroke-width="2" />
          </svg>

        </div>
      </div>
    </div>


  </div>
</section>
