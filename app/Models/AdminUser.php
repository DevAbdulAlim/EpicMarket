<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminUser extends Authenticatable
{
    use HasFactory, SoftDeletes;

    protected $guard = 'admin';

    protected $fillable = ['name', 'email', 'password', 'profile_image', 'is_active'];

    protected $hidden = ['password', 'remember_token'];
}
