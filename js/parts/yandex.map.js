if (document.querySelector('.map')) {
  let center = [54.314192, 48.403132];


  function init() {

    let map = new ymaps.Map("map", {
      center: center, // ваши данные
      zoom: 17
    });

    let placemarRkschool = new ymaps.Placemark([54.314192, 48.403132], {}, {
      iconLayout: 'default#image', /* говорим что будем отображать на карте в качестве геометки  */
      iconImageHref: './img/map/balun.svg', /* указываем пусть к картинке на нашем сайте  */
      iconImageSize: [48, 64], /* размеры картинки  */
      iconImageOffset: [-19, -44] /* отступ от центра  */
    });

    map.controls.remove('geolocationControl'); // удаляем геолокацию
    map.controls.remove('searchControl'); // удаляем поиск
    map.controls.remove('trafficControl'); // удаляем контроль трафика
    map.controls.remove('typeSelector'); // удаляем тип
    map.controls.remove('fullscreenControl'); // удаляем кнопку перехода в полноэкранный режим
    map.controls.remove('zoomControl'); // удаляем контрол зуммирования
    map.controls.remove('rulerControl'); // удаляем контрол правил
    map.behaviors.disable(['scrollZoom']); // отключаем скролл карты (опционально)
    map.behaviors.disable('drag'); // — это отключает прокрутку карты, но есть одно "но": сама страница также не прокручивается.

    map.geoObjects.add(placemarRkschool);

    placemarRkschool.events
      .add('mouseenter', function (e) {
        e.get('target').options.set('iconImageHref', './img/map/balun-hover.svg');
      })
      .add('mouseleave', function (e) {
        e.get('target').options.set('iconImageHref', './img/map/balun.svg');
      });
  }

  ymaps.ready(init);
};
