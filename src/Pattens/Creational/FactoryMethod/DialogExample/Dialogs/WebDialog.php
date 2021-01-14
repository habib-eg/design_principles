<?php


namespace App\Pattens\Creational\FactoryMethod\DialogExample\Dialogs;


use App\Pattens\Creational\FactoryMethod\DialogExample\Buttons\Button;
use App\Pattens\Creational\FactoryMethod\DialogExample\Buttons\SystemButton;
use App\Pattens\Creational\FactoryMethod\DialogExample\Buttons\WebButton;

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