<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anatomy extends Model
{
    protected $fillable = [
        'name',
    ];

    protected $table = 'anatomy';

    public function post()
    {
        return $this->hasMany('App\Posts');
    }
}
