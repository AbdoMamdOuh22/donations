<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Footer extends Model
{
    use Translatable;
    protected $translatable = ['about_footer' , 'title_address' , 'address' , 'phone' , 'phone_num' , 'email' , 'email_acc' ,
                               'office_time' , 'time' , 'title_links' , 'home' , 'about' , 'causes' , 'event' , 'blog' , 'contact'];
}
