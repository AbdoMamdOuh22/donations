<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Abouticonhome extends Model
{
    use Translatable;
    protected $translatable = ['icon_title1', 'icon_decs1' , 'icon_title2' , 'icon_decs2' , 'icon_title3' , 'icon_decs3' ,
                               'icon_title4' , 'icon_decs4' , 'icon_title5' , 'icon_decs5' , 'icon_title6' , 'icon_decs6'];
}
