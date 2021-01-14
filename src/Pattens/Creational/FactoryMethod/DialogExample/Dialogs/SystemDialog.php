<?php


namespace App\Pattens\Creational\FactoryMethod\DialogExample\Dialogs;


use App\Pattens\Creational\FactoryMethod\DialogExample\Buttons\Button;
use App\Pattens\Creational\FactoryMethod\DialogExample\Buttons\SystemButton;

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