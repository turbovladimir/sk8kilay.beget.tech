<?php
include_once '../classes/safemysql.class.php';
include_once '../classes/db_connect.php';
include_once '../classes/Point.php';

# Забрали данные из бд
$sql    = 'SELECT * FROM ?n';
$table  = 'Ru_city_coordinats';
$get_sql_data = $db->getAll($sql, $table);

# Создали массив с объектами и посчитали дистанции от нашей точки

$point_arr = [];

for ($i = 0; $i < count($get_sql_data); $i++){

    $name = $get_sql_data[$i]['city_name'];
    $name = str_replace(' ', '+', $name);
    include 'curl.php';

    //$point_arr[$i] = new Point($name, $x_cor, $y_cor);
    // update log:
    $sql_update_x = "UPDATE `sk8kilay_test`.`Ru_city_coordinats` SET `x_cor`= ?s WHERE  `city_name`= ?s";
    $db->query($sql_update_x, $x_cor, $name);
    $sql_update_y = "UPDATE `sk8kilay_test`.`Ru_city_coordinats` SET `y_cor`= ?s WHERE  `city_name`= ?s";
    $db->query($sql_update_y, $y_cor, $name);
}


?>