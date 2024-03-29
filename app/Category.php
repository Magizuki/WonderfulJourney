<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'categories';

    protected $fillable = ['id', 'name'];

    public function Article(){
        return $this->hasMany(Article::class);
    }
}
