<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity_type extends Model
{
    protected $table = 'activity_types';

    protected $fillable = array('name');

    public $timestamps = true;



    public function company_info()
    {
        return $this->hasMany(Company_Info::class);

    }//end of products
}
