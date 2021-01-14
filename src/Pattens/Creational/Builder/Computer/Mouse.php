<?php
namespace App\Pattens\Creational\Prototype\Employee\Builder\Computer;

/**
 * Class Mouse
 * @package App\Pattens\Creational\Builder\Computer
 */
class Mouse
{
    private bool $withExtraUtilities;

    /**
     * Mouse constructor.
     * @param bool $withExtraUtilities
     */
    public function __construct(bool $withExtraUtilities)
    {
        $this->withExtraUtilities = $withExtraUtilities;
    }

    /**
     * @return bool
     */
    public function isWithExtraUtilities(): bool
    {
        return $this->withExtraUtilities;
    }

    /**
     * @param bool $withExtraUtilities
     * @return Mouse
     */
    public function setWithExtraUtilities(bool $withExtraUtilities): Mouse
    {
        $this->withExtraUtilities = $withExtraUtilities;
        return $this;
    }
}