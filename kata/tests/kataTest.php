<?php

declare(strict_types=1);

namespace Kata\Tests;

use Kata\Solution;
use PHPUnit\Framework\TestCase;

class KataTest extends TestCase
{
    /**
     * @test
     * @covers
    */
    public function assertTrues()
    {
        $solution = new Solution();
        $this->assertTrue($solution->example(), 'Solution example is not returning true');
    }

    /**
     * @test
     * @covers
    */
    public function isLeapYear()
    {
        $solution = new Solution();
        $this->assertTrue($solution->isLeapYear(1996), '1996 is a leap year');
    }
}
