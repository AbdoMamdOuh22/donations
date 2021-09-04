<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Headeerlink extends Model
{
    use Translatable;
    protected $translatable = ['Home', 'About' , 'Causes' , 'Event' , 'Blog' , 'Contact'];
}
