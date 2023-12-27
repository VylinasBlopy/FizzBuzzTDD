<?php

namespace App\Services;

class FizzBuzzService
{
    static public function executeFizzBuzz(int $max): array
    {
        $result = [];

        for ($i = 1; $i <= $max; $i++) {
            if (self::isFizzBuzz($i)) {
                $result[] = 'FizzBuzz';
                continue;
            }

            if (self::isBuzz($i)) {
                $result[] = 'Buzz';
                continue;
            }

            if (self::isFizz($i)) {
                $result[] = 'Fizz';
                continue;
            }

            $result[] = $i;
        }

        return $result;
    }

    static public function isFizz(int $number): bool
    {
        return $number % 3 === 0;
    }

    static public function isBuzz(int $number): bool
    {
        return $number % 5 === 0;
    }

    static public function isFizzBuzz(int $number): bool
    {
        return self::isFizz($number) && self::isBuzz($number);
    }
}