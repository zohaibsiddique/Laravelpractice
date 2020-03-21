<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded =[];

    public function path() {
        return route('articles.index');
    }

    public function user() {

    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }



}
