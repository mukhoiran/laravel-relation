<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Passport;
use App\Models\Lesson;
use App\Models\Forum;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function showProfile($id)
  {
      return view('user.profile', ['user' => User::findOrFail($id)]);
  }

  public function showPassport($id)
  {
      return view('user.passport', ['passport' => Passport::findOrFail($id)]);
  }

  public function showLesson($id)
  {
      return view('user.lesson', ['lesson' => Lesson::findOrFail($id)]);
  }

  public function showForum($id)
  {
      return view('user.forum', ['forum' => Forum::findOrFail($id)]);
  }
}
