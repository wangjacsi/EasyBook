<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Cklmercer\ModelSettings\HasSettings;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    use HasSettings;
    use HasApiTokens;

    // can make soft delect
    protected $dates = ['deleted_at'];

    // Make slug key binding
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
    * Default settings about user's Json set
    */
    protected $defaultSettings = [
      'company' =>'',
      'phone' => '',
      'address' => '',
      'website' => '',
      'nation' => '',
      'city' => '',
      'SNS' => ['facebook'=>'', 'instagram'=>'',
                'google' => '', 'twitter' =>'',
                'pinterest' => '', 'github' => '',
              'bitbucket' => ''],
    ];



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'slug',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    /**
     * Relation functions
     */
    public function oauthClients(){
        return $this->hasMany('App\OauthClient');
    }



}
