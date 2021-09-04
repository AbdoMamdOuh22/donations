<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Titlecontact extends Model
{
    use Translatable;
    protected $translatable = ['title_section_contact', 'heading_contact' , 'decs_contact' , 'heading_form_contact' , 'decs_form_contact'];
}
