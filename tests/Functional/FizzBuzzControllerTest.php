<?php

namespace App\Tests\Functional;

use Generator;
use App\Controller\FizzBuzzController;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


/**
 * @coversDefaultClass FizzBuzzController
 */
class FizzBuzzControllerTest extends WebTestCase
{
    /**
     * @test
     * @dataProvider executeFizzBuzzProvider
     */
    public function testFizzBuzz(int $max, string $expected): void
    {
        $client = static::createClient();
        $client->request('GET', "/$max");

        $this->assertResponseIsSuccessful();
        $this->assertJsonStringEqualsJsonString(
            $expected,
            $client->getResponse()->getContent()
        );
    }

    public static function executeFizzBuzzProvider(): Generator
    {
        yield [10,
            json_encode([
                1,
                2,
                'Fizz',
                4,
                'Buzz',
                'Fizz',
                7,
                8,
                'Fizz',
                'Buzz',
            ])
        ];
        yield [20,
            json_encode([
                1,
                2,
                'Fizz',
                4,
                'Buzz',
                'Fizz',
                7,
                8,
                'Fizz',
                'Buzz',
                11,
                'Fizz',
                13,
                14,
                'FizzBuzz',
                16,
                17,
                'Fizz',
                19,
                'Buzz',
            ])
        ];
    }
}