<?php
/**
 * Created by PhpStorm.
 * User: v.sadovnikov
 * Date: 14.02.2019
 * Time: 11:52
 */

class Point
{
    public $name;
    public $x_coordinte;
    public $y_coordinate;
    protected $distance;

    function __construct($name, $x_coordinte,$y_coordinate)
    {
        $this->name = $name;
        $this->x_coordinte = floatval($x_coordinte);
        $this->y_coordinate = floatval($y_coordinate);
    }

    function set_distance($x_zero_point, $y_zero_point){
        $xd = $this->x_coordinte - floatval($x_zero_point);
        $yd = $this->y_coordinate - floatval($y_zero_point);
        $d = pow($xd, 2) + pow($yd, 2);
        $this->distance = sqrt($d);
    }

    function get_distance(){
        return $this->distance;
    }

}