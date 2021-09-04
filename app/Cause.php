<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Cause extends Model
{
    use Translatable;
    protected $translatable = ['heading', 'amount_required' , 'amount_required_price' , 'donated' , 'donated_price' , 'donate' , 'decs' , 'button'];
}
