<?php


namespace App\Pattens\Creational\Prototype\Employee\FactoryMethod\DialogExample\Buttons;


class WebButton extends Button
{

    /**
     * @return string
     */
    public function show(): string
    {
        return " # <b> Clicked Web Button </b> # ";
    }

    /**
     *
     */
    public function click(): void
    {
       echo static::class." Clicked ";
    }
}