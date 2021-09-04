<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Event extends Model
{
    use Translatable;
    protected $translatable = ['heading', 'date' , 'decs' , 'title_decs' ,  'button'];
}
