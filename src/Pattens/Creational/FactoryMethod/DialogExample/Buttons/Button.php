<?php


namespace App\Pattens\Creational\Prototype\Employee\FactoryMethod\DialogExample\Buttons;


abstract class Button
{
    abstract public function show():string;
    abstract public function click():void;
}