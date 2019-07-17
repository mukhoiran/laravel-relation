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
        <li>{{ $user->name }}</li>
      @endforeach
    </ul>
  </body>
</html>
