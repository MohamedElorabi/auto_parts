<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class New_branch extends Model
{
    protected $table = 'new_branches';
    protected $fillable = array('region_id', 'city', 'phone', 'establishment_location');
    public $timestamps = true;

}
