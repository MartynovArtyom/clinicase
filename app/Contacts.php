<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'custom_name_user',
    ];

    public function user_owner() {
        return $this->belongsTo('App\User');
    }

    public function contact_user() {
        return $this->belongsTo('App\User');
    }
}
