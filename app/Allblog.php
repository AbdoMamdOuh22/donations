<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Allblog extends Model
{
    use Translatable;
    protected $translatable = ['date', 'heading' , 'decs' , 'button'];
}
