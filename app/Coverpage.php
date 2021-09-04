<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Coverpage extends Model
{
    use Translatable;
    protected $translatable = ['title_about_cover', 'link_home' , 'link_about' , 'title_causes_cover' , 'link_causes' , 'title_blog_cover' ,
                               'link_blog' , 'title_contact_cover' , 'link_contact' , 'title_event_cover' , 'link_event' , 'causes_single' ,
                                'causes_single_link' , 'title_blogsingle_cover' , 'link_blogsingle' , 'event_single' , 'event_single_link'];
}
