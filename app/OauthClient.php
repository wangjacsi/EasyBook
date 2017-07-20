<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OauthClient extends Model
{
    // has many members
    // OauthClient > Member
    public function members(){
        return $this->hasMany('App\Member');
    }

    // has many events
    // OauthClient > event
    public function events(){
        return $this->hasMany('App\Event');
    }
}