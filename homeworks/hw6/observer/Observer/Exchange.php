<?php

namespace Observer\Observer;

use Observer\Contract\ObserverInterface;
use Observer\Entity\Vacancy;

class Exchange
{

    private static $instance = null;
    private $observers = [];
    private $vacancies = [];

    /**
     * @return Exchange|null
     */
    public static function getInstance(): ?Exchange
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function register(ObserverInterface $observer)
    {
        $this->observers[] = $observer;
        echo 'add user '. PHP_EOL;
    }

    public function unregister(ObserverInterface $observer)
    {
        foreach ($this->observers as $key => $item) {
            if ($item == $observer) {
                unset($this->observers[$key]);
            }
        }
        echo "delete user" . PHP_EOL;
    }

    public function addVacancy(Vacancy $vacancy)
    {
        $this->vacancies = $vacancy;
        $this->notifyObservers();
    }

    /**
     *
     */
    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->notify();
        }
    }
}