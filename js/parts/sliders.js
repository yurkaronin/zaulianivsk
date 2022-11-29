const swiper = new Swiper('.home-screen .mySwiper', {
  direction: "vertical",
  // loop: true,
  // autoplay: true,

  pagination: {
    el: '.home-screen .swiper-pagination',
    clickable: true,
  },

  navigation: {
    nextEl: '.home-screen .swiper-button--next',
    prevEl: '.home-screen .swiper-button--prev',
  },

});
