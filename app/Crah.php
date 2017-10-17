<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crah extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'weather', 'managerCrah', 'posteCrah', 'tasksReal', 'tasksToMake', 'problem', 'solutionProblem', 'user_id', 'typeCrah_id'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
    
    public function typeCrah() {
        return $this->belongsTo('App\typeCrah');
    }

}
