<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const ADMIN = 'Admin';
    const USER = 'User';

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
