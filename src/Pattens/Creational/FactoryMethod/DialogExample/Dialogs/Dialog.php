<?php

namespace App\Pattens\Creational\Prototype\Employee\FactoryMethod\DialogExample\Dialogs;

use App\Pattens\Creational\Prototype\Employee\FactoryMethod\DialogExample\Buttons\Button;

abstract class Dialog
{
    abstract public function createdButton():Button;

    public function renderDialog():string
    {
        $button = $this->createdButton();
        return "
        ########################
        {$button->show()}
        ########################
        ";
    }
}