<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Titlehome extends Model
{
    use Translatable;
    protected $translatable = ['title_section_causes', 'heading_causes' , 'span_heading_causes' , 'decs_causes' ,
                                'about_title' , 'heading_about' , 'desc_about' , 'button_about' , 'event_title' ,
                                'span_heading_event' , 'decs_event' , 'heading_event' , 'title_section_blog'    ,
                                'span_heading_blog' , 'heading_blog' , 'button_event' , 'decs_event' , 'button_blog'];
}
