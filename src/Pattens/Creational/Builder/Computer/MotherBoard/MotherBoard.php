<?php
namespace App\Pattens\Creational\Builder\Computer\MotherBoard;

use App\Pattens\Creational\Builder\Computer\MotherBoard\MainParts\CPU;
use App\Pattens\Creational\Builder\Computer\MotherBoard\MainParts\Disk;
use App\Pattens\Creational\Builder\Computer\MotherBoard\MainParts\GPU;
use App\Pattens\Creational\Builder\Computer\MotherBoard\MainParts\NetworkCard;
use App\Pattens\Creational\Builder\Computer\MotherBoard\MainParts\RAM;
use App\Pattens\Creational\Builder\Computer\MotherBoard\MainParts\Sockets;

/**
 * Class MotherBoard
 * @package App\Pattens\Creational\Builder\Computer\MotherBoard
 */
class MotherBoard
{
    private CPU $cpu;
    private RAM $ram;
    private GPU $gpu;
    private Sockets $sockets;
    private NetworkCard $networkCard;
    private Disk $disk;

    /**
     * MotherBoard constructor.
     * @param CPU $cpu
     * @param RAM $ram
     * @param GPU $gpu
     * @param Sockets $sockets
     * @param NetworkCard $networkCard
     * @param Disk $disk
     */
    public function __construct(CPU $cpu, RAM $ram, GPU $gpu, Sockets $sockets, NetworkCard $networkCard, Disk $disk)
    {
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->gpu = $gpu;
        $this->sockets = $sockets;
        $this->networkCard = $networkCard;
        $this->disk = $disk;
    }

    /**
     * @return CPU
     */
    public function getCpu(): CPU
    {
        return $this->cpu;
    }

    /**
     * @param CPU $cpu
     * @return MotherBoard
     */
    public function setCpu(CPU $cpu): MotherBoard
    {
        $this->cpu = $cpu;
        return $this;
    }

    /**
     * @return RAM
     */
    public function getRam(): RAM
    {
        return $this->ram;
    }

    /**
     * @param RAM $ram
     * @return MotherBoard
     */
    public function setRam(RAM $ram): MotherBoard
    {
        $this->ram = $ram;
        return $this;
    }

    /**
     * @return GPU
     */
    public function getGpu(): GPU
    {
        return $this->gpu;
    }

    /**
     * @param GPU $gpu
     * @return MotherBoard
     */
    public function setGpu(GPU $gpu): MotherBoard
    {
        $this->gpu = $gpu;
        return $this;
    }

    /**
     * @return Sockets
     */
    public function getSockets(): Sockets
    {
        return $this->sockets;
    }

    /**
     * @param Sockets $sockets
     * @return MotherBoard
     */
    public function setSockets(Sockets $sockets): MotherBoard
    {
        $this->sockets = $sockets;
        return $this;
    }

    /**
     * @return NetworkCard
     */
    public function getNetworkCard(): NetworkCard
    {
        return $this->networkCard;
    }

    /**
     * @param NetworkCard $networkCard
     * @return MotherBoard
     */
    public function setNetworkCard(NetworkCard $networkCard): MotherBoard
    {
        $this->networkCard = $networkCard;
        return $this;
    }

    /**
     * @return Disk
     */
    public function getDisk(): Disk
    {
        return $this->disk;
    }

    /**
     * @param Disk $disk
     * @return MotherBoard
     */
    public function setDisk(Disk $disk): MotherBoard
    {
        $this->disk = $disk;
        return $this;
    }
}