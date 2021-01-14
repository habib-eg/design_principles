<?php


namespace App\Pattens\Creational\Prototype\Employee\FactoryMethod\DialogExample\Buttons;


class UIButton extends Button
{

    /**
     * @return string
     */
    public function show(): string
    {
        return " # <b> Clicked UI Button </b> # ";
    }

    /**
     *
     */
    public function click(): void
    {
       echo static::class." Clicked ";
    }
}