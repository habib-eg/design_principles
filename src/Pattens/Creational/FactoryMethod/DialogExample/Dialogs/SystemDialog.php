<?php


namespace App\Pattens\Creational\Prototype\Employee\FactoryMethod\DialogExample\Dialogs;


use App\Pattens\Creational\Prototype\Employee\FactoryMethod\DialogExample\Buttons\Button;
use App\Pattens\Creational\Prototype\Employee\FactoryMethod\DialogExample\Buttons\SystemButton;

class SystemDialog extends Dialog
{

    /**
     * @return Button
     */
    public function createdButton(): Button
    {
        return new SystemButton;
    }
}