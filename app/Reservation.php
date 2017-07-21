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
        'user_id', 'client_id', 'start_daytime', 'end_daytime',
        'title', 'information', 'maker', 'class_id', 'settings',
    ];

    public function users(){
        return $this->belongsTo('App\User');
    }

    public function scopeLatestFirst($query){
        return $query->orderBy('created_at', 'desc');
    }
}
