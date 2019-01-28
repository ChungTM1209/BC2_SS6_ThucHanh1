<?php
/**
 * Created by PhpStorm.
 * User: chungtran
 * Date: 28/01/2019
 * Time: 08:59
 */
include 'Tiger.php';
include 'Chicken.php';
include_once 'Apple.php';
include_once 'Orange.php';
echo('---- Animals <br>');
$animals[0] = new Tiger();
$animals[1] = new Chicken();
foreach ($animals as $animal) {
    echo $animal->makeSound() . "";
    if ($animal instanceof Chicken) {
        echo $animal->howToEat() . '
';
    }
}
echo('<br>---- Fruits<br>');

$fruits[0] = new Apple();
$fruits[1] = new Orange();

foreach ($fruits as $fruit) {
    echo $fruit->howToEat() . '<br>';
}