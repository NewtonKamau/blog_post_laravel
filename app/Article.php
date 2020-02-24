<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'last_update';
    protected $fillable = ['title', 'except', 'body'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
