<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company_sector_specialist extends Model
{

    protected $table = 'company_sector_specialist';
    protected $fillable = array('name');
    public $timestamps = true;

}
