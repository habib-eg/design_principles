<?php
namespace App\Pattens\Creational\Prototype\Employee\Builder\Computer;

/**
 * Class Keyboard
 * @package App\Pattens\Creational\Builder\Computer
 */
class Keyboard
{
    private bool  $utfSupport;

    /**
     * Keyboard constructor.
     * @param bool $utfSupport
     */
    public function __construct(bool $utfSupport)
    {
        $this->utfSupport = $utfSupport;
    }

    /**
     * @return bool
     */
    public function isUtfSupport(): bool
    {
        return $this->utfSupport;
    }

    /**
     * @param bool $utfSupport
     * @return Keyboard
     */
    public function setUtfSupport(bool $utfSupport): Keyboard
    {
        $this->utfSupport = $utfSupport;
        return $this;
    }


}