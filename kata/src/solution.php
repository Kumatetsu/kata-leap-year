<?php

declare(strict_types=1);

namespace Kata;

class Solution
{
    public function example(): bool
    {
        return true;
    }

    public function isLeapYear($year)
    {
        return $this->isDivisibleBy400($year)
            ? true
            : $this->isDivisibleBy4($year) && !$this->isDivisibleBy100($year);
    }

    private function isDivisibleBy4($year)
    {
        return ($year % 4 === 0) ? true : false;
    }

    private function isDivisibleBy100($year)
    {
        return ($year % 100 === 0) ? true : false;
    }

    private function isDivisibleBy400($year)
    {
        return ($year % 400 === 0) ? true : false;
    }
}

