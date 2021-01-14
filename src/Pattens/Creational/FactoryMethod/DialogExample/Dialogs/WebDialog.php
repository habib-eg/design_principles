<?php


namespace App\Pattens\Creational\Prototype\Employee\FactoryMethod\DialogExample\Dialogs;


use App\Pattens\Creational\Prototype\Employee\FactoryMethod\DialogExample\Buttons\Button;
use App\Pattens\Creational\Prototype\Employee\FactoryMethod\DialogExample\Buttons\WebButton;

class WebDialog extends Dialog
{

    /**
     * @return Button
     */
    public function createdButton(): Button
    {
        return new WebButton();
    }
}