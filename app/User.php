<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'image',
        'status',
        'first_name',
        'last_name',
        'phone_number',
        'user_profile',
        'specialty_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function specialty() {
        return $this->belongsTo('App\Specialty');
    }

    public function messages_autor()
    {
        return $this->hasMany('App\Messages', 'autor_id');
    }

    public function messages_receiver()
    {
        return $this->hasMany('App\Messages', 'receiver_id');
    }

    public function contact_user_owner()
    {
        return $this->hasMany('App\Contacts', 'user_owner_id');
    }

    public function posts()
    {
        return $this->hasMany('App\Posts', 'autor_id');
    }

    public function favorites_posts()
    {
        return $this->hasMany('App\FavoritesPosts');
    }

    public function comments()
    {
        return $this->hasMany('App\Comments');
    }

    public function favorites_comments()
    {
        return $this->hasMany('App\FavoritesComments');
    }

}
