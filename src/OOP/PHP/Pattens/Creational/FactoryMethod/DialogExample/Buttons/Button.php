<?php


namespace App\OOP\PHP\Pattens\Creational\FactoryMethod\DialogExample\Buttons;


abstract class Button
{
    abstract public function show():string;
    abstract public function click():void;
}