const swiper = new Swiper('.home-screen .mySwiper', {

  // loop: true,
  speed: 900,
  parallax: true,
  // autoplay: {
  //   delay: 5000,
  // },

  pagination: {
    el: '.home-screen .swiper-pagination',
    clickable: true,
  },

  navigation: {
    nextEl: '.home-screen .swiper-button-next',
    prevEl: '.home-screen .swiper-button-prev',
  },


});
