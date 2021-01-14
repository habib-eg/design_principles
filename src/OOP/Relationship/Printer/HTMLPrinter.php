<?php


namespace App\OOP\Relationship\Printer;


class HTMLPrinter extends Printer
{

    /**
     * @return string
     */
    public function printToScreen(): string
    {
        return "<h1>This is a HTML format of the string {$this->getStringToBePrinted()} </h1>";
    }
}