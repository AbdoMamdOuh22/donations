<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Abouthome extends Model
{
    use Translatable;
    protected $translatable = ['title', 'paragraph' , 'dec' , 'donationGoal' , 'donationRalsed' , 'donationralsed_title' , 'donationgoal_title' ,
                               'button'];
}

