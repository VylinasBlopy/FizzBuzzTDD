<?php

namespace App\Tests\Unit\Services;

use Generator;
use App\Services\FizzBuzzService;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass FizzBuzzService
 */
class FizzBuzzServiceTest extends TestCase
{
    /**
     * @test
     * @dataProvider executeFizzBuzzProvider
     * @covers ::executeFizzBuzz
     */
    public function executeFizzBuzz(int $max, int $expected): void
    {
        $this->assertSame($expected, count(FizzBuzzService::executeFizzBuzz($max)));
    }

    /**
     * @test
     * @dataProvider isFizzProvider
     * @covers ::isFizz
     */
    public function isFizz(int $number, bool $expected): void
    {
        $this->assertSame($expected, FizzBuzzService::isFizz($number));
    }

    /**
     * @test
     * @dataProvider isBuzzProvider
     * @covers ::isBuzz
     */
    public function isBuzz(int $number, bool $expected): void
    {
        $this->assertSame($expected, FizzBuzzService::isBuzz($number));
    }

    /**
     * @test
     * @dataProvider isFizzBuzzProvider
     * @covers ::isFizzBuzz
     */
    public function isFizzBuzz(int $number, bool $expected): void
    {
        $this->assertSame($expected, FizzBuzzService::isFizzBuzz($number));
    }

    public static function executeFizzBuzzProvider(): Generator
    {
        yield [10, 10];
        yield [100, 100];
    }

    public static function isFizzProvider(): Generator
    {
        yield [3, true];
        yield [6, true];
        yield [9, true];
    }

    public static function isBuzzProvider(): Generator
    {
        yield [5, true];
        yield [10, true];
        yield [20, true];
    }

    public static function isFizzBuzzProvider(): Generator
    {
        yield [15, true];
        yield [30, true];
        yield [45, true];
    }
}