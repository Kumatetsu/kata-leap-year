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
        if ($year % 4 === 0) return true;
        return false;
    }
}
