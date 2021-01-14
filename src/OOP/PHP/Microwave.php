<?php


namespace App\OOP\PHP;


/**
 * Class Microwave
 * @package App\OOP\PHP
 */
class Microwave
{
    /**
     * @var int
     */
    private int $temp;
    /**
     * @var string
     */
    private string $program;
    /**
     * @var int
     */
    private int $time;
    /**
     * @var bool|null
     */
    private bool $status=false;

    /**
     * @return int
     */
    public function getTemp(): int
    {
        return $this->temp;
    }

    /**
     * @param int $temp
     */
    public function setTemp(int $temp): void
    {
        $this->temp = $temp;
    }

    /**
     * @return string
     */
    public function getProgram(): string
    {
        return $this->program;
    }

    /**
     * @param string $program
     */
    public function setProgram(string $program): void
    {
        $this->program = $program;
    }

    /**
     * @return int
     */
    public function getTime(): int
    {
        return $this->time;
    }

    /**
     * @param int $time
     */
    public function setTime(int $time): void
    {
        $this->time = $time;
    }

    /**
     * Microwave constructor.
     * @param int $temp
     * @param string $program
     * @param int $time
     */
    public function __construct(int $temp, string $program, int $time)
    {
        $this->temp = $temp;
        $this->program = $program;
        $this->time = $time;
    }

    public function deFreeze():string
    {
        return "I'm de-freezing the food at {$this->temp} using the program {$this->program}";
    }

    private function turnOnMicrowaveHeatingSystem()
    {
        return " Starting on Heating System ";
    }

    private function loadingDeFreezingProgram()
    {
        return "Loading program {$this->program}";
    }

    public function turnOff()
    {
        $this->status = false ;
        return false ;
    }
    public function turnOon()
    {
        $this->status = true ;
        return true ;
    }
}