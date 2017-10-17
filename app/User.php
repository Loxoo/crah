<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname', 'email', 'password', 'role_id', 'team_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function team() {
        return $this->belongsTo('App\Team');
    }
    
    public function role() {
        return $this->belongsTo('App\Role');
    }
    
    public function user() {
        return $this->hasMany('App\User');
    }

}
