<?php


namespace Contract;


interface UserInterface
{
    public function getId(): int;

    public function getLogin(): string;
}