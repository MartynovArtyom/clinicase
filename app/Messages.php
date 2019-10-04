<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'message',
    ];

    public function autor() {
        return $this->belongsTo('App\User');
    }

    public function receiver() {
        return $this->belongsTo('App\User');
    }
}
