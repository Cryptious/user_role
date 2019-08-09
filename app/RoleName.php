<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleName extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role',
    ];

    public function userroles(){
      return $this->hasMany(Task::class);
    }
}
