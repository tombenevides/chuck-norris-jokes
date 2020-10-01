<?php

namespace Tombenevides\ChuckNorrisJokes\Http\Controllers;

use Illuminate\Routing\Controller;
use Tombenevides\ChuckNorrisJokes\Facades\ChuckNorris;

class ChuckNorrisController extends Controller
{
    public function __invoke()
    {
        return view('chuck-norris::joke', [
            'joke' => ChuckNorris::getRandomJoke(),
        ]);
    }
}
