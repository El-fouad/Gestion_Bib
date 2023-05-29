<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use  App\Models\book;
class User extends Authenticatable
{
    use HasFactory;
    protected $fillable=[
        'name',
        "email",
        "password",
    ];
    protected $hidden=[
        'password',
        "remember_token"
    ];

    protected $casts=[
        'email_verified_at'=>'datetime',
    ];
    public function books()
    {
        return $this->hasMany(book::class);
    }
}

