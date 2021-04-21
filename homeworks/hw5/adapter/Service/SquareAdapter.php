<?php

namespace Adapter\Service;

use Adapter\Contract\ISquare;
use Adapter\Lib\SquareAreaLib;

class SquareAdapter implements ISquare
{
    private $component;

    public function __construct(SquareAreaLib $component)
    {
        $this->component = $component;
    }

    function squareArea(int $sideSquare)
    {
        $diagonal = sqrt(2) * $sideSquare;
        return $this->component->getSquareArea($diagonal);

    }
}