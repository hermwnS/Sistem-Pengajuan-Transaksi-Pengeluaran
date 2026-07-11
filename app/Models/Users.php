<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    protected $table = 'users';
    protected $primaryKey = 'id_user';
    protected $fillable = [
        'id_user',
        'email',
        'password',
        'id_roles'
    ];

    /**
     * Relasi ke model Roles
     */
    public function role()
    {
        return $this->belongsTo(Roles::class, 'id_roles', 'id_roles');
    }

    /**
     * Cek apakah user memiliki role tertentu
     */
    public function hasRole(string $roleName)
    {
        return $this->role()->where('name', $roleName)->exists();
    }

    /**
     * Dapatkan nama role user
     */
    public function getRoleName()
    {
        return $this->role->name ?? null;
    }
}
