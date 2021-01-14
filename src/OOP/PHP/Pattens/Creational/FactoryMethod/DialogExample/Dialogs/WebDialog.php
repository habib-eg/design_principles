<?php


namespace App\OOP\PHP\Pattens\Creational\FactoryMethod\DialogExample\Dialogs;


use App\OOP\PHP\Pattens\Creational\FactoryMethod\DialogExample\Buttons\Button;
use App\OOP\PHP\Pattens\Creational\FactoryMethod\DialogExample\Buttons\SystemButton;
use App\OOP\PHP\Pattens\Creational\FactoryMethod\DialogExample\Buttons\WebButton;

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