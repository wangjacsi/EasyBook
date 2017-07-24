<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Cklmercer\ModelSettings\HasSettings;

class Member extends Model
{
    use Notifiable;
    use HasSettings;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_id', 'name', 'description', 'settings',
    ];


    public function oauthClient(){
        return $this->belongsTo('App\OauthClient');
    }

    public function events(){
        return $this->hasMany('App\Event');
    }

}
