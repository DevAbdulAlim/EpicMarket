<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminRole extends Model
{
    protected $fillable = ['name'];

    public function permissions()
    {
        return $this->belongsToMany(AdminPermission::class, 'admin_permission_role');
    }

    public function users()
    {
        return $this->belongsToMany(AdminUser::class, 'admin_role_user');
    }

    public function givePermissionTo($permission)
    {
        $this->permissions()->syncWithoutDetaching($permission);
    }
}
