<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = [
        'text',
    ];

    public function autor() {
        return $this->belongsTo('App\User');
    }

    public function post() {
        return $this->belongsTo('App\Posts');
    }
}
