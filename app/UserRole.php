<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $guarded = [];
    
    public function rolename(){
      return $this->belongsTo(RoleName::class);
    }
}
