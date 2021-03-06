<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class RoleUser extends Pivot
{
    /**
     * The pivot table associated to Role and User models.
     *
     * @var string
     */
    protected $table = 'role_user';
}
