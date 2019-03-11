<?php
$city_list = ''; // переменная содержащая список городов
$ru_cities_arr = [];
# Забрали данные из бд
$sql    = 'SELECT * FROM ?n';
$table  = 'Ru_city_coordinats';
$get_sql_data = $db->getAll($sql, $table);

sort($get_sql_data);

for ($i = 0; $i< count($get_sql_data); $i++){

    $ru_cities_arr[] =  $get_sql_data[$i]['city_name'];

    if ($get_sql_data[$i]['city_name'] == $my_city){

        $my_point_city_name = $get_sql_data[$i]['city_name'];
        $my_point_x = $get_sql_data[$i]['x_cor'];
            $my_point_y = $get_sql_data[$i]['y_cor'];

        $my_point = [$my_point_city_name, $my_point_x, $my_point_y] ;
    }
}

foreach ($ru_cities_arr as $value)  $city_list .= "$value".',';

$city_list= substr($city_list, 0, -1);  // убрали последнюю запятую в строке
?>
