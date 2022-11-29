const swiper = new Swiper('.home-screen .mySwiper', {
  direction: "vertical",

  pagination: {
    el: '.home-screen .slider-pagination',
    clickable: true,
  },

  navigation: {
    nextEl: '.home-screen .slider-button--next',
    prevEl: '.home-screen .slider-button--prev',
  },

});
