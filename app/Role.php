<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //

    // public function roles(){
    //     return $this->belongsToMany('App/Role', 'assignrole', 'roles_id', 'users_id');
    // }

    public function users(){
        return $this->belongsToMany('App/User', 'assignrole', 'users_id', 'roles_id');
    }
}
