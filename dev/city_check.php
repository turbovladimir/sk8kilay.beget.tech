<?php
$user_ip = check_ip();
$SxGeo = new SxGeo('SxGeoCity.dat', SXGEO_BATCH);
$city = $SxGeo->getCity($user_ip);
$my_city = $city['city']['name_ru'];
?>