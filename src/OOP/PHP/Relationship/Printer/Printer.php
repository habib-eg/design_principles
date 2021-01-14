<?php


namespace App\OOP\PHP\Relationship\Printer;


abstract class Printer
{
    /**
     * @var string
     */
    protected string $stringToBePrinted;

    /**
     * @return string
     */
    public function getStringToBePrinted(): string
    {
        return $this->stringToBePrinted;
    }

    /**
     * @param string $stringToBePrinted
     * @return Printer
     */
    public function setStringToBePrinted(string $stringToBePrinted): Printer
    {
        $this->stringToBePrinted = $stringToBePrinted;
        return $this;
    }
    /**
     * @return string
     */
    abstract public function printToScreen():string;
}