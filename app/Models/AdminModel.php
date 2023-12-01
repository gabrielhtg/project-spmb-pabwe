<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class AdminModel extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'admin';

    protected $fillable = [
        'username',
        'password',
        'lastname',
        'firstname',
        'profile_pict',
        'created_by'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
