<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminUser extends Model
{
    use HasFactory, SoftDeletes;

    protected $guard = 'admin';

    protected $fillable = ['name', 'email', 'password', 'profile_image', 'is_active'];

    protected $hidden = ['password', 'remember_token'];
}
