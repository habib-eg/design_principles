<?php


namespace App\Pattens\Creational\Builder\Builders;


use App\Pattens\Creational\Builder\Builder;
use App\Pattens\Creational\Builder\Computer\CoolingSystem;
use App\Pattens\Creational\Builder\Computer\Keyboard;
use App\Pattens\Creational\Builder\Computer\Monitor;
use App\Pattens\Creational\Builder\Computer\MotherBoard\MainParts\CPU;
use App\Pattens\Creational\Builder\Computer\MotherBoard\MainParts\Disk;
use App\Pattens\Creational\Builder\Computer\MotherBoard\MainParts\GPU;
use App\Pattens\Creational\Builder\Computer\MotherBoard\MainParts\NetworkCard;
use App\Pattens\Creational\Builder\Computer\MotherBoard\MainParts\RAM;
use App\Pattens\Creational\Builder\Computer\MotherBoard\MainParts\Sockets;
use App\Pattens\Creational\Builder\Computer\MotherBoard\MotherBoard;
use App\Pattens\Creational\Builder\Computer\MotherBoard\Sockets\CType;
use App\Pattens\Creational\Builder\Computer\MotherBoard\Sockets\USB;
use App\Pattens\Creational\Builder\Computer\Mouse;
use App\Pattens\Creational\Builder\Computer\Types\Computer;
use App\Pattens\Creational\Builder\Computer\Types\ComputerCS;
use App\Pattens\Creational\Builder\Computer\UPS;

class ComputerCSBuilder extends Builder
{

    /**
     * @return MotherBoard
     */
    protected function buildMotherBoard(): MotherBoard
    {
       $cpu = new CPU(20);
       $ram = new RAM(16);
       $gpu = new GPU(2);
       $sockets = new Sockets([
           new USB(3),
           new USB(2),
           new CType(true),
           new CType(false),
           new CType(true),
       ]);
       $networkCard = new NetworkCard(1);
       $disk = new  Disk('SSD');

       return  new MotherBoard(
           $cpu,
           $ram,
           $gpu,
           $sockets,
           $networkCard,
           $disk
       );
    }

    /**
     * @return Keyboard
     */
    protected function buildKeyboard(): Keyboard
    {
        return new Keyboard(true);
    }

    /**
     * @return Mouse
     */
    protected function buildMouse(): Mouse
    {
       return  new Mouse(true);
    }

    /**
     * @return Monitor
     */
    protected function buildMonitor(): Monitor
    {
       return new Monitor('1920 FHD');
    }

    /**
     * @return CoolingSystem
     */
    protected function buildCoolingSystem(): CoolingSystem
    {
        return new CoolingSystem(5);
    }

    /**
     * @return UPS
     */
    protected function buildUPS(): UPS
    {
        return new UPS(96);
    }

    /**
     * @return Computer
     */
    public function getComputer(): Computer
    {
        $computer = new ComputerCS();
        $computer->setKeyboard($this->buildKeyboard());
        $computer->setMonitor($this->buildMonitor());
        $computer->setMouse($this->buildMouse());
        $computer->setMotherBoard($this->buildMotherBoard());
        $computer->setCoolingSystem($this->buildCoolingSystem());
        return  $computer;
    }
}