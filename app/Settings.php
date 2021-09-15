<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{

    protected $table = 'settings';

    protected $fillable = array('about','privacy_policy','user_agreement', 'help_center', 'facebook_url', 'instagram_url', 'snap_chat_url', 'twitter_url');

    public $timestamps = true;

}
