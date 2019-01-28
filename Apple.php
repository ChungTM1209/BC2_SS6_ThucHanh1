<?php
/**
 * Created by PhpStorm.
 * User: chungtran
 * Date: 28/01/2019
 * Time: 09:18
 */
include_once 'Fruit.php';

class Apple extends Fruit
{
    public function howToEat()
    {
        return "Apple could be sliced";
    }
}