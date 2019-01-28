<?php
/**
 * Created by PhpStorm.
 * User: chungtran
 * Date: 28/01/2019
 * Time: 08:57
 */
include_once 'Animal.php';
include_once 'Edible.php';

class Chicken extends Animal implements Edible
{
    public function makeSound()
    {
        return "Chicken: cluck - cluck!";   // TODO: Implement makeSound() method.
    }

    public function howToEat()
    {
        return "could be fried";// TODO: Implement howToEat() method.
    }
}