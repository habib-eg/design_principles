<?php


namespace App\OOP\Relationship\Printer;


class PlainTextPrinter extends Printer
{

    /**
     * @return string
     */
    public function printToScreen(): string
    {
        $string = strip_tags($this->getStringToBePrinted());
        return "This is a plain text format of the string {$string}";
    }
}