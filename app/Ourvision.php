<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Ourvision extends Model
{
    use Translatable;
    protected $translatable = ['heading', 'decs'];
}
