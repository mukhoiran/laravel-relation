<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Your lesson, {{ $lesson->title }}</h1>
    <ul>
      @foreach ($lesson->users as $user)
        <li>{{ $user->name }} - {{ $user->pivot->created_at }} - {{ ($user->pivot->is_active == 1)?'active':'not active' }}</li>
      @endforeach
    </ul>

    <p>Like : {{$lesson->likes->count()}}</p>
  </body>
</html>
