<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Titlecause extends Model
{
    use Translatable;
    protected $translatable = ['title_section_causes', 'heading_causes' , 'span_heading_causes' , 'button_causes' , 'follow'];
}
