<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminPermission extends Model
{
    protected $fillable = ['name', 'routes', 'methods'];

    protected $casts = [
        'routes' => 'array',
        'methods' => 'array',
    ];

    public function roles()
    {
        return $this->belongsToMany(AdminRole::class, 'admin_permission_role');
    }
}
