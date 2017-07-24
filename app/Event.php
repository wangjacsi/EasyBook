<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Cklmercer\ModelSettings\HasSettings;

class Event extends Model
{
    use Notifiable;
    use HasSettings;

    /**
    * Default settings about user's Json set
    */
    protected $defaultSettings = [
      'color' =>'',
      'bgColor' => '',
      'borderColor' => '',
      'textColor' => '',
      'class' => '',
      'editable' => '',
      'expression' => '',
    ];

    public function member(){
        return $this->belongsTo('App\Member');
    }
}
