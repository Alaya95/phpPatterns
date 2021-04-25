<?php

namespace Adapter\Service;

use Adapter\Contract\ICircle;
use Adapter\Lib\CircleAreaLib;

class AdapterCircle implements ICircle
{

    private $component;

    public function __construct(CircleAreaLib $component)
    {
        $this->component = $component;
    }

    function circleArea(int $circumference)
    {
        $diagonal = $circumference / M_PI;

        return $this->component->getCircleArea($diagonal);
    }
}