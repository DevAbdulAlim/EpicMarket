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

    public function roles()
    {
        return $this->belongsToMany(AdminRole::class, 'admin_role_user');
    }

    public function hasRole($role)
    {
        return $this->roles()->where('name', $role)->exists();
    }

    public function hasPermission($route, $method)
    {
        foreach ($this->roles as $role) {
            foreach ($role->permissions as $permission) {
                if (
                    $this->checkJsonRoutePermission($route, $permission->routes) &&
                    $this->checkJsonMethodPermission($method, $permission->methods)
                ) {
                    return true;
                }
            }
        }

        return false;
    }

    private function checkJsonRoutePermission($route, $permissionRoutes)
    {
        foreach ($permissionRoutes as $permissionRoute) {
            // Normalize both route and permissionRoute to handle leading/trailing slashes
            $normalizedRoute = trim($route, '/');
            $normalizedPermissionRoute = trim($permissionRoute, '/');

            // Check if the permission route has a wildcard
            if (strpos($normalizedPermissionRoute, '*') !== false) {
                // Convert the wildcard pattern to a regex pattern
                $regexPattern = str_replace('\*', '.*', preg_quote($normalizedPermissionRoute, '/'));

                // Check if the normalized route matches the regex pattern
                if (preg_match("/^{$regexPattern}$/", $normalizedRoute)) {
                    return true;
                }
            } elseif ($normalizedRoute === $normalizedPermissionRoute) {
                return true;
            }
        }

        return false;
    }


    private function checkJsonMethodPermission($method, $permissionMethods)
    {
        return in_array('any', $permissionMethods) || in_array('*', $permissionMethods) || in_array($method, $permissionMethods);
    }

    public function assignRole($role)
    {
        $this->roles()->syncWithoutDetaching($role);
    }
}
