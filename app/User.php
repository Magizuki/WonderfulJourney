<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    

    use Notifiable;

    protected $table = 'users';

    protected $fillable = ['name', 'email', 'password', 'phone', 'role'];

    protected $hidden = [
        'password', 'remember_token'
    ];

    public function Article(){
        return $this->hasMany(Article::class);
    }
}
