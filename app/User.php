<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $table = 'users';

    protected $fillable = ['name', 'email', 'phone', 'role'];

    protected $hidden = [
        'password', 'remember_token'
    ];

    public function Article(){
        return $this->hasMany(Article::class);
    }
}
