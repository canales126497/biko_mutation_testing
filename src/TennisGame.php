<?php

namespace Deg540\PHPTestingBoilerplate;

interface TennisGame
{
    public function wonPoint(string $playerName): void;
    public function getScore(): string;
}
