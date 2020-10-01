<?php

namespace Tombenevides\ChuckNorrisJokes\Console;

use Illuminate\Console\Command;
use Tombenevides\ChuckNorrisJokes\Facades\ChuckNorris;

class ChuckNorrisJoke extends Command
{
    protected $signature = 'chuck-norris';

    protected $description = 'Output chuck norris joke.';

    public function handle()
    {
        $this->info(ChuckNorris::getRandomJoke());
    }
}