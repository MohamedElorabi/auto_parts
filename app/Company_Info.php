<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company_Info extends Model
{

    protected $table = 'company_info';
    public $guarded=[];
    public $timestamps = true;

    public function user()
	{
		return $this->belongsTo('App\User', 'user_id');
    }

    public function activity_types()
	{
		return $this->belongsTo('App\Activity_type', 'activity_type_id');
    }

    public function company_sector()
	{
		return $this->belongsTo('App\Company_sector_specialist', 'company_sector_specialist_id');
    }

    public function region()
	{
		return $this->belongsTo('App\Region', 'region_id');
    }


}
