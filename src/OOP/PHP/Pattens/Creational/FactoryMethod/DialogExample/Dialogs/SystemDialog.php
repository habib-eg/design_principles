<?php


namespace App\OOP\PHP\Pattens\Creational\FactoryMethod\DialogExample\Dialogs;


use App\OOP\PHP\Pattens\Creational\FactoryMethod\DialogExample\Buttons\Button;
use App\OOP\PHP\Pattens\Creational\FactoryMethod\DialogExample\Buttons\SystemButton;

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