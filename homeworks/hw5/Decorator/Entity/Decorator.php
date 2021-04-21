<?php

namespace Decorator\Entity;

use Decorator\Contract\ISender;
use Decorator\Repository\Sender;

/**
 * Базовый класс Декоратора следует тому же интерфейсу, что и другие компоненты.
 * Основная цель этого класса - определить интерфейс обёртки для всех конкретных
 * декораторов. Реализация кода обёртки по умолчанию может включать в себя поле
 * для хранения завёрнутого компонента и средства его инициализации.
 */
abstract class Decorator implements ISender
{
    /**
     * @var Sender
     */
    protected $component;

    public function __construct(ISender $component)
    {
        $this->component = $component;
    }
}