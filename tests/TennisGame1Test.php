<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\TennisGame1;
use PHPUnit\Framework\TestCase;

final class TennisGame1Test extends TestCase
{
    /**
     * @test
     */
    public function firstTest()
    {
        $tennisGame = new TennisGame1('Nadal', 'Federer');

        $result = $tennisGame->getScore();

        $this->assertEquals('Love-All', $result);
    }
}
