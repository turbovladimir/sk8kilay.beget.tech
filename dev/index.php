<?php
## библиотеки, классы, функции
include_once 'classes/my_functions.php';
include_once 'classes/SxGeo.php';
include_once 'classes/safemysql.class.php';
include_once 'classes/db_connect.php';
include_once 'classes/Point.php';

include_once 'city_check.php'; // поиск города по айпи юзера
include_once 'get_city_list.php';// получаем города из бд и определяем координаты города юзера
//$my_city = 'Москва';
include_once 'get_nearby_city.php'; // поиск ближайшего города к городу юзера
//$nearby_city = 'Реутов';
echo '
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Поиск маршрута по Яндекс.Картам</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
echo '<script>var city_list_str = "' .$city_list. '"</script>';
echo '<script>var client_city = "' .$my_city. '"</script>';
echo '<script>var nearby_city = "' .$nearby_city. '"</script>';
echo '<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="js/functions/create_dom_elem.js"></script>
    <script src="js/script.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=6d4274c8-d3cb-4a36-bbd4-246dcbcad1f3&lang=ru_RU" type="text/javascript">
    </script>
    <script src="js/functions/yandex_script.js"></script>
    <link rel="stylesheet" href="content/style.css">
</head>

<body>
</body>
</html>';
?>