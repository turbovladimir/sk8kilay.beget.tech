<?php
function check_ip(){
    $ip = strval($_SERVER['REMOTE_ADDR']);
    $ip_server =strval($_SERVER['SERVER_ADDR']);
    if(empty($ip)) return $ip_server;
    else return $ip;
}


/*
function db_command($query,
                    $table,
                    $column1,
                    $column2,
                    $column3,
                    $value1,
                    $value2,
                    $value3)
{
    switch ($query) {
        case ('create_table'):
            $sql ='CREATE TABLE ?n (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, url VARCHAR(10000))';
            break;
        case ('insert'):
            $sql ='INSERT INTO  ?n (`id`, `url`) VALUES (NULL, ?s)';
            break;
        case ('update'):
            $sql ='UPDATE ?n SET `url_amount`= ?i';
            break;
        case ('delete'):
            $sql ='DELETE  FROM ?n LIMIT 2000';
            break;
    }

    $db->query($sql, $table);
}



/*
$sql_create_table = 'CREATE TABLE ?n (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, url VARCHAR(10000))';
$db->query($sql_create_table, $table);

while ($postb[$z] != '') {
    $values = $postb[$z];
    $sql_insert_table ="INSERT INTO  ?n (`id`, `url`) VALUES (NULL, ?s)";
    $db->query($sql_insert_table, $table, $values);

    @$delete_comand = $db->getAll("DELETE  FROM ?n LIMIT 2000", $table);
    $sql_update = "UPDATE ?n SET `url_amount`= ?i";
*/
?>