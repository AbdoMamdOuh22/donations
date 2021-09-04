<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Contactu extends Model
{
    use Translatable;
    protected $translatable = ['title_icon', 'decs_icon1' , 'decs_icon2'];
}
