<?php

namespace App\Traits;

use App\Models\Users;
use Illuminate\Support\Facades\Auth;

trait RoleHelper
{
    /**
     * Cek apakah user saat ini memiliki role tertentu
     *
     * @param string $roleName
     * @return bool
     */
    public static function hasRole(string $roleName)
    {
        /** @var Users|null $user */
        $user = Auth::user();
        return $user && $user->hasRole($roleName);
    }

    /**
     * Cek apakah user memiliki salah satu dari role yang diberikan
     *
     * @param array|string $roles
     * @return bool
     */
    public static function hasAnyRole($roles)
    {
        if (!Auth::check()) {
            return false;
        }

        /** @var Users $user */
        $user = Auth::user();
        $userRole = $user->getRoleName();
        return in_array($userRole, (array) $roles);
    }

    /**
     * Dapatkan nama role user saat ini
     *
     * @return string|null
     */
    public static function getCurrentRole()
    {
        /** @var Users|null $user */
        $user = Auth::user();
        return $user ? $user->getRoleName() : null;
    }
}

