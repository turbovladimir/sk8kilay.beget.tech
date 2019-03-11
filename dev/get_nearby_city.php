<?php
$my_city = $my_point[0];
$my_pointX = $my_point[1];
$my_pointY = $my_point[2];
$point_arr = [];
$distance_arr = [];
$nearby_city= ''; // тут будет ближайший город

# Создали массив с объектами и посчитали дистанции от нашей точки
for ($i = 0; $i < count($get_sql_data); $i++){

    $name = $get_sql_data[$i]['city_name'];
    $x_cor = $get_sql_data[$i]['x_cor'];
    $y_cor = $get_sql_data[$i]['y_cor'];

    if ($name == $my_city) continue; // Если город совпадает с городом местоположения то пропускаем

    $point_arr[$i] = new Point($name, $x_cor, $y_cor);
    $point_arr[$i]->set_distance($my_pointX,$my_pointY);

    $distance = $point_arr[$i]->get_distance();
    $distance_arr[$i] = [$distance,$name];
}

asort($distance_arr);
$distance_arr = array_values($distance_arr);
$nearby_city = $distance_arr[0][1];
?>