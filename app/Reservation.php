<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Cklmercer\ModelSettings\HasSettings;

class Reservation extends Model
{
    use Notifiable;
    use HasSettings;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'start_daytime', 'end_daytime',
        'title', 'information', 'name', 'member_id', 'settings',
    ];

    public function member(){
        return $this->belongsTo('App\Member');
    }

    public function scopeLatestFirst($query){
        return $query->orderBy('created_at', 'desc');
    }
}
