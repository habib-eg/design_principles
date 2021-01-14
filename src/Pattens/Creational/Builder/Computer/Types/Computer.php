<?php
namespace App\Pattens\Creational\Prototype\Employee\Builder\Computer\Types;

use App\Pattens\Creational\Prototype\Employee\Builder\Computer\Keyboard;
use App\Pattens\Creational\Prototype\Employee\Builder\Computer\Monitor;
use App\Pattens\Creational\Prototype\Employee\Builder\Computer\MotherBoard\MotherBoard;
use App\Pattens\Creational\Prototype\Employee\Builder\Computer\Mouse;

/**
 * Class Computer
 * @package App\Pattens\Creational\Builder\Computer\Types
 */
abstract class Computer
{

    protected MotherBoard $motherBoard;
    protected Keyboard $keyboard;
    protected Mouse $mouse;
    protected Monitor $monitor;

    /**
     * @return bool
     */
    abstract public function turnOn():bool;

    /**
     * @return bool
     */
    abstract public function turnOff():bool;

    /**
     * @return string
     */
    public function dashboard():string
    {
        return  "";
    }

    /**
     * @return MotherBoard
     */
    public function getMotherBoard(): MotherBoard
    {
        return $this->motherBoard;
    }

    /**
     * @param MotherBoard $motherBoard
     * @return Computer
     */
    public function setMotherBoard(MotherBoard $motherBoard): Computer
    {
        $this->motherBoard = $motherBoard;
        return $this;
    }

    /**
     * @return Keyboard
     */
    public function getKeyboard(): Keyboard
    {
        return $this->keyboard;
    }

    /**
     * @param Keyboard $keyboard
     * @return Computer
     */
    public function setKeyboard(Keyboard $keyboard): Computer
    {
        $this->keyboard = $keyboard;
        return $this;
    }

    /**
     * @return Mouse
     */
    public function getMouse(): Mouse
    {
        return $this->mouse;
    }

    /**
     * @param Mouse $mouse
     * @return Computer
     */
    public function setMouse(Mouse $mouse): Computer
    {
        $this->mouse = $mouse;
        return $this;
    }

    /**
     * @return Monitor
     */
    public function getMonitor(): Monitor
    {
        return $this->monitor;
    }

    /**
     * @param Monitor $monitor
     * @return Computer
     */
    public function setMonitor(Monitor $monitor): Computer
    {
        $this->monitor = $monitor;
        return $this;
    }

}