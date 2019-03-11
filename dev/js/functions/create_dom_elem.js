function create_DOM() {
    // блоки для карты и меню
    $('<div>', {
        id: 'city_list'
    })
        .add($('<div>', {
            id: 'map'
        }))
        .appendTo('body');

    // создаем таблицу
    $('<table>', {
        class: 'table',
        id: 'table'
    })
        .appendTo('#city_list');

    $('<tr>')
        .appendTo('table');

    // создаем список городов
    var city_list_arr = city_list_str.split(',');
    city_list_str = ''; // отчищаем для перезаписи
    for (var i = 0; i < city_list_arr.length; i++) {
        city_list_str += '<option>' + city_list_arr[i] + '</option>' // перезаписываем
    }

    $('<td>', {
        id: 'client_city'
    })
        .add($('<td>', {
            id: 'nearby_city'
        }))
        .add($('<td>', {
            id: 'select_city'
        }))
        .add($('<td>', {
            id: 'reset_rout'
        }))
        .appendTo('tr');

    $('<label>', {
        text: 'Ваш город: ' + client_city
    })
        .appendTo('#client_city');

    $('<label>', {
        text: 'Ближайший город к вашему: ' + nearby_city
    })
        .appendTo('#nearby_city');

    // #select_city наполняем динамически
    add_list();

    $('<div><input type="button" id="button" value="Сбросить маршрут" onclick ="delete_route()"/></div>')
        .appendTo('#reset_rout');


}

// добавление нового списка городов
function add_list() {
    var list_id = 'list_' + n;
    var select_class = 'choosen_city';

    var elem_list = '<ul class="class-list" id="' + list_id + '">' +
        '<li><label>Добавить город в маршрут: </label></li>' +
        '<li><select class ="' + select_class + '" onchange ="add_route()" >' +
        '<option value="1" selected disabled></option>' +
        city_list_str +
        '</select>' +
        '</li>' +
        '<li>' +
        '</li>' +
        '<img src="../dev/content/plus.png" class="plus" onclick ="add_list()"/>' +
        '</ul>';

    $(elem_list)
        .appendTo('#select_city');

    $(".plus")
        .attr({
            "style": "vertical-align: text-top",
            "height": "20",
            "width": "20"
        });
    n++;
}