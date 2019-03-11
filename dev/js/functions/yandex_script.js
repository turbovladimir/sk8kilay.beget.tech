// создали карту
function init_yandex_map() {
    myMap = new ymaps.Map('map', {
        center: [55.753994, 37.622093],
        zoom: 9
    }, {
        searchControlProvider: 'yandex#search'
    });
    startEditing = true;
    myMap.geoObjects.add(get_rout(points_arr));
}

function get_rout(points_arr) {

    // Создание экземпляра маршрута.
    return multiRoute = new ymaps.multiRouter.MultiRoute({
        referencePoints: points_arr,
        params: {
            // Тип маршрута
            routingMode: "auto"
        }
    }, {
        // Автоматически устанавливать границы карты так,
        // чтобы маршрут был виден целиком.
        boundsAutoApply: true,
        mapStateAutoApply: true
    });
}

function add_route() {

    var choosen_city = $('.choosen_city');
    if (choosen_city !== null) {
        for (var i = 0, z = 1; i < choosen_city.length; i++, z++) {
            if (n === 1) points_arr.pop(); // удалим вторую точку
            points_arr[z] = choosen_city[i].value // добавим города в массив
        }

        myMap.geoObjects.removeAll(); // удаляем маршрут
        myMap.geoObjects.add(get_rout(points_arr)); // создаем новый
    }
}

function delete_route() {
    myMap.geoObjects.removeAll(); // удаляем маршрут
    var get_dom_ul = $('.class-list');
    if (get_dom_ul.length > 1) {
        n = 0; // сбросили счетчик элементов
        $(".class-list").empty();
        add_list();
    }

}