<?php
$ch = curl_init();
$path = 'https://geocode-maps.yandex.ru/1.x/?geocode=';
$request = $name;
$url = $path.$request;
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   // возвращает веб-страницу
$content = curl_exec($ch) ;
curl_close($ch);

$xml = new SimpleXMLElement($content);
print_r($xml);

$points = $xml->GeoObjectCollection->featureMember[0]->GeoObject->Point->pos[0];

$points = explode(' ', $points);
$city_name = $request;

$x_cor = $points[1];
$y_cor = $points[0];

?>