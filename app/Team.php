<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'manager',
    ];

    public function user() {
        return $this->hasMany('App\User');
    }
}
