<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{

    protected $table = 'region';

    protected $fillable = array('region_name');
    
    public $timestamps = true;

}
