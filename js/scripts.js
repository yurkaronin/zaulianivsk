// Глобальные переменные
const menuButton = document.querySelector('.nav-button');
const footerLink = document.querySelector('.footer__head-link');
const mobileLink = document.querySelectorAll('.mobile-menu__link');

// инициализация кастомных select
if(document.querySelector('#select-1')) {
  const select1 = new ItcCustomSelect('#select-1');
};
if(document.querySelector('#select-2')) {
  const select2 = new ItcCustomSelect('#select-2');
};
if(document.querySelector('#select-3')) {
  const select3 = new ItcCustomSelect('#select-3');
};

// Функции
// функция подключения скриптов
function includeFiles(url) {
  var script = document.createElement('script');
  script.src = url;
  document.getElementsByTagName('head')[0].appendChild(script);
};

// модификация шапки
function headerChange() {
  let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  if (scrollTop > 10) {
    document.body.classList.add('header-sticky');
  } else {
    document.body.classList.remove('header-sticky');
  }
};

// Основная рабочая область
document.addEventListener("DOMContentLoaded", () => {
  // подключаем файлы тут
  // includeFiles("./js/parts/accordion.js");
  includeFiles("./js/parts/sliders.js");
  includeFiles("./js/parts/yandex.map.js");

  // небольшие программы
  // Проверяем состояние прокрутки страницы. если прокрутка есть - перекрашиваем шапку
  headerChange();
  // отслеживаем событие прокрутки страницы > модификация шапки
  document.addEventListener('scroll', e => {
    headerChange();
  });
  // при клике по кнопке вызова меню - добавляем служебный класс на body
  if (menuButton) {
    menuButton.addEventListener('click', function () {
      document.body.classList.toggle('mob-menu-open');
      menuButton.classList.toggle('open');
    });
  };


  // показ подкатегорий в шапке сайта при наведении на пункт в меню
  let headerMenuLink = document.querySelectorAll('.header .navigation__link');
  if (document.body.clientWidth > 1440) {
    for (let item of headerMenuLink) {
      item.addEventListener('mouseover', function (event) {
        console.log(this);
        this.classList.add('active');
      });

      item.addEventListener('mouseout', function (event) {
        this.classList.remove('active');
        console.log(this);
      });

    };
  } else {
    for (let item of headerMenuLink) {
      item.addEventListener('click', function (e) {
        if (item.classList.contains('navigation__link--mod')) {
          console.log('Есть класс');
          e.preventDefault();
        // item.classList.toggle('mob-menu-open');
        item.parentNode.classList.toggle('active');
        } else {
          console.log('Неть!');
          e.preventDefault();
          item.parentNode.classList.toggle('active-mod');
        }

      });

    };
  };


  if(document.querySelector('#slider-photo')) {
    const photoSlider = new Swiper('#slider-photo .swiper', {
      // Optional parameters
      loop: true,
      slidesPerView: 1,
      spaceBetween: 32,
      // If we need pagination
      pagination: {
        el: '#slider-photo .swiper-pagination',
        type: "fraction",
      },

      // Navigation arrows
      navigation: {
        nextEl: '#slider-photo .swiper-button-next',
        prevEl: '#slider-photo .swiper-button-prev',
      },

    });
  };

});

document.addEventListener('click', e => console.log(e.target));
