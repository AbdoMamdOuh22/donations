<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Titleabout extends Model
{
    use Translatable;
    protected $translatable = ['title_section_about', 'heading_about' , 'decs_about' , 'title_section_team' , 'heading_team' , 'decs_team'];
}
