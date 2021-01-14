<?php
namespace App\OOP\PHP\Relationship;

use App\OOP\PHP\Relationship\Printer\Printer;

/**
 * Class Teacher
 * @package App\OOP\PHP\Relationship
 */
class Teacher
{
    private string $name;

    /**
     * Teacher constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Teacher
     */
    public function setName(string $name): Teacher
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param Printer $printer
     * @return string
     */
    public function sayWelcome(Printer $printer):string
    {
        $printer->setStringToBePrinted($this->getName());

        return  $printer->printToScreen();
    }

    /**
     * @return string
     */
    public function assignHomeWork():string
    {
        return " Please do a 20 push ups.";
    }

    public function evaluateStudentHomeWork(Student $student)
    {
        if ($student->getHomeWorkScore() >= 50) {
            return "Success";
        }
        return  "Failed";
    }
}