// переменные для яндекс карт
var myMap;
var multiRoute;
var point_from  = client_city;
var point_to    = nearby_city;
var points_arr  = [point_from, point_to];  // точки по умолчанию
var n = 0; // счетчик для создания новых элементов

setTimeout(function func() {
// Создание дом елементов

    create_DOM();

// включаем карты
    ymaps.ready(init_yandex_map());

}, 1000);