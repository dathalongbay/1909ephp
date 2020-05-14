<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class RolesModel extends Model
{
    //
    protected $table = 'roles';


    public function users()
    {
        return $this->belongsToMany('App\User','roleusers', 'user_id', 'role_id');
    }
}
