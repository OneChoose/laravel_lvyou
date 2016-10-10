<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class admin
 * @package App\Model
 */
class Admin extends Model
{
    protected $table = 'admin';

    public function getRole()
    {
        return $this->belongsTo('App\Model\Role', 'role_id', 'id');
    }
}
