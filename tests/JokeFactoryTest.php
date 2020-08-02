<?php

namespace Tombenevides\ChuckNorrisJokes\Tests;

use PHPUnit\Framework\TestCase;
use Tombenevides\ChuckNorrisJokes\JokeFactory;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        $jokes = new JokeFactory([
            'This is a joke'
        ]);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }

    /** @test */
    public function it_returns_a_predefined_joke()
    {
        $defaultJokes = [
            'Chuck norris\' tears cure cancer. Too bad he has never cried.',
            'Chuck norris counted to infinity... twice.'
        ];

        $jokes = new JokeFactory();

        $joke = $jokes->getRandomJoke();

        $this->assertContains( $joke, $defaultJokes);
    }
}