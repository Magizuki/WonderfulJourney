<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{

    protected $table = 'articles';

    protected $fillable = ['id', 'user_id', 'category_id', 'title', 'description', 'image'];

    public function User(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
