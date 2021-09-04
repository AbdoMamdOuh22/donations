<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Donordata extends Model
{
    protected $fillable = ['first_name' , 'last_name' , 'email_address' , 'anonymous_donation' , 'comment'];
    use Translatable;
    protected $translatable = ['first_name' , 'last_name' , 'email_address' , 'anonymous_donation' , 'comment'];

}
