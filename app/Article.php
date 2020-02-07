<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'except', 'body'];

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
