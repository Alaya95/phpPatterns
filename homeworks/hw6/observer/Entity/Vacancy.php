<?php


namespace Observer\Entity;


use Observer\Observer\Exchange;

class Vacancy
{
    public $name;
    public $salary;
    public $experience;

    public function __construct($name, $salary, $experience)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->experience = $experience;
        Exchange::getInstance()->addVacancy($this);
    }

}