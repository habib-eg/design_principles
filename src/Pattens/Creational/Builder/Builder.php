<?php
namespace App\Pattens\Creational\Builder;

use App\Pattens\Creational\Builder\Computer\CoolingSystem;
use App\Pattens\Creational\Builder\Computer\Keyboard;
use App\Pattens\Creational\Builder\Computer\Monitor;
use App\Pattens\Creational\Builder\Computer\MotherBoard\MotherBoard;
use App\Pattens\Creational\Builder\Computer\Mouse;
use App\Pattens\Creational\Builder\Computer\Types\Computer;
use App\Pattens\Creational\Builder\Computer\UPS;

/**
 * Class Builder
 * @package App\Pattens\Creational\Builder
 */
abstract class Builder
{
    /**
     * @var Computer
     */
    protected Computer $computer;

    /**
     * @return MotherBoard
     */
    abstract protected function buildMotherBoard() : MotherBoard;

    /**
     * @return Keyboard
     */
    abstract protected function buildKeyboard () : Keyboard;

    /**
     * @return Mouse
     */
    abstract protected function buildMouse() : Mouse;

    /**
     * @return Monitor
     */
    abstract protected function buildMonitor () : Monitor;

    /**
     * @return Computer
     */
    abstract public function getComputer () : Computer;

    /**
     * @return CoolingSystem
     */
    abstract protected function buildCoolingSystem () : CoolingSystem;

    /**
     * @return UPS
     */
    abstract protected function buildUPS () : UPS;

}