<?php

namespace Tombenevides\ChuckNorrisJokes\Models;

use Illuminate\Database\Eloquent\Model;

class Joke extends Model
{
    protected $quarded = [];
    
    protected $table = 'jokes';
}