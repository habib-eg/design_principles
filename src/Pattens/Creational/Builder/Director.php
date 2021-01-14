<?php


namespace App\Pattens\Creational\Prototype\Employee\Builder;


use App\Pattens\Creational\Prototype\Employee\Builder\Computer\Types\Computer;

class Director
{
    private Builder  $builder;

    /**
     * Director constructor.
     * @param Builder $builder
     */
    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    /**
     * @return Builder
     */
    public function getBuilder(): Builder
    {
        return $this->builder;
    }

    /**
     * @param Builder $builder
     * @return Director
     */
    public function setBuilder(Builder $builder): Director
    {
        $this->builder = $builder;
        return $this;
    }

    public function makeComputer():Computer
    {
        return $this->getBuilder()->getComputer();
    }
}