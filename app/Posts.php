<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = [
        'title',
        'description',
        'accept_image',
        'image_type',
        'image'
    ];

    protected $table = 'posts';

    public function autor() {
        return $this->belongsTo('App\User');
    }

    public function specialty() {
        return $this->belongsTo('App\Specialty');
    }

    public function anatomy() {
        return $this->belongsTo('App\Anatomy');
    }

    public function comments() {
        return $this->hasMany('App\Comments', 'post_id')->orderBy('updated_at', 'DESC');
    }

    public function comments_count() {
        return $this
            ->hasMany('App\Comments', 'post_id')
            ->selectRaw('count(*) as aggregate');
    }

    public function favorites_posts() {
        return $this->hasMany('App\FavoritesPosts', 'post_id');
    }

    public function favorites_posts_count() {
        return $this
            ->favorites_posts()
            ->selectRaw('count(*) as aggregate');
    }
}
