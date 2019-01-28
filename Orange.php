<?php
/**
 * Created by PhpStorm.
 * User: chungtran
 * Date: 28/01/2019
 * Time: 09:20
 */
include_once 'Fruit.php';

class Orange extends Fruit
{
    public function howToEat()
    {
        return "Orange could be juiced";
    }
}