<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{

    protected $table = 'services';
    protected $fillable = array('service_name','description','image');
    public $timestamps = true;

}
