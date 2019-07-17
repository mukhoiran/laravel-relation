<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  public function passport()
  {
    return $this->hasOne('App\Models\Passport');
  }

  public function forums()
  {
    return $this->hasMany('App\Models\Forum');
  }
}
