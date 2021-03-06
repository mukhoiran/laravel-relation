<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  public function lessons()
  {
      return $this->morphByMany('App\Models\Lesson','taggable');
  }

  public function forums()
  {
      return $this->morphByMany('App\Models\Forum','taggable');
  }
}
