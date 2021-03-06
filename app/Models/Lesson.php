<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
  public function users()
  {
      return $this->belongsToMany('App\Models\User')->withTimeStamps()->withPivot('is_active');
      // where pivot
      // return $this->belongsToMany('App\Models\User')->withTimeStamps()->withPivot('is_active')->wherePivot('is_active',0);
      // return $this->belongsToMany('App\Models\User')->withTimeStamps()->withPivot('is_active')->wherePivotIn('is_active',[0,1]);
  }

  public function likes(){
    return $this->morphMany('App\Models\Like', 'likeable');
  }

  public function tags(){
    return $this->morphToMany('App\Models\Tag', 'taggable');
  }
}
