<?php

namespace Tombenevides\ChuckNorrisJokes;

class JokeFactory
{
    protected $jokes = [
        'Chuck norris\' tears cure cancer. Too bad he has never cried.',
        // 'Chuck norris counted to infinity... twice.'
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
