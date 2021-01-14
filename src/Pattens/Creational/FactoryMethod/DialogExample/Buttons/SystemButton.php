<?php


namespace App\Pattens\Creational\Prototype\Employee\FactoryMethod\DialogExample\Buttons;


class SystemButton extends Button
{

    /**
     * @return string
     */
    public function show(): string
    {
        return " # Clicked System Button # ";
    }

    /**
     *
     */
    public function click(): void
    {
       echo static::class." Clicked ";
    }
}