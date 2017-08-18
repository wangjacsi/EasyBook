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

    public function scopeNotRevoked($query){
        return $query->where('revoked', '0');
    }

}
