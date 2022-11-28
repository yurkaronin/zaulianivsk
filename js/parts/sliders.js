if (document.querySelector('#photo-slider')) {
  // слайдер с картинками на главной странице
  const swiperIMG = new Swiper('#photo-slider', {
    loop: false,
    speed: 2400,
    parallax: true,
  });
  // слайдер с текстовым описанием на главной странице
  const swiperDETAILS = new Swiper('#text-slider', {
    loop: false,
    speed: 2400,
    grabCursor: false,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    mousewheel: {
      invert: false,
    },
    pagination: {
      el: '.home-slider .swiper-pagination',
      type: 'fraction',
    },
    navigation: {
      nextEl: '.home-slider .swiper-button-next',
      prevEl: '.home-slider .swiper-button-prev',
    },

    parallax: true,
  });
  // отключаем смену слайдов при прокрутке колёсиком мыши
  swiperDETAILS.mousewheel.disable();
  // синхронизируем два слайдера между собой
  swiperIMG.controller.control = swiperDETAILS
  swiperDETAILS.controller.control = swiperIMG
};


// СЕРВИС слайдеры
// миниатюры
if (document.querySelector('#slider-small-img-2')) {
  var swiper3 = new Swiper("#slider-small-img-2 .swiper", {
    spaceBetween: 16,
    loop: true,
    freeMode: true,
    watchSlidesProgress: true,
    navigation: {
      nextEl: "#slider-small-img-2 .navigation-button-next",
      prevEl: "#slider-small-img-2 .navigation-button-prev",
    },
    breakpoints: {
      0: { // при 0px и выше
        direction: 'horizontal',
        slidesPerView: 2,
      },
      426: { // при 0px и выше
        direction: 'horizontal',
        slidesPerView: 3,
      },
      769: { // при 768px и выше
        direction: 'vertical',
        slidesPerView: 7,
      }
    },
  });
};
// большой слайдер
if (document.querySelector('#slider-big-img-2')) {
  var swiper4 = new Swiper("#slider-big-img-2 .swiper", {
    spaceBetween: 32,
    loop: true,
    navigation: {
      nextEl: "#slider-big-img-2 .navigation-button-next",
      prevEl: "#slider-big-img-2 .navigation-button-prev",
    },
    thumbs: {
      swiper: swiper3,
    },
  });
};

// Карточка автомобиля слайдеры
// миниатюры
if (document.querySelector('#slider-small-img')) {
  var swiper3 = new Swiper("#slider-small-img .swiper", {
    spaceBetween: 16,
    loop: true,
    freeMode: true,
    watchSlidesProgress: true,
    direction: 'horizontal',
    slidesPerView: 6,
    navigation: {
      nextEl: "#slider-small-img .navigation-button-next",
      prevEl: "#slider-small-img .navigation-button-prev",
    },
  });
};
// большой слайдер
if (document.querySelector('#slider-big-img')) {
  var swiper = new Swiper("#slider-big-img .swiper", {
    spaceBetween: 32,
    loop: true,
    navigation: {
      nextEl: "#slider-big-img .navigation-button-next",
      prevEl: "#slider-big-img .navigation-button-prev",
    },
    thumbs: {
      swiper: swiper3,
    },
  });
};



