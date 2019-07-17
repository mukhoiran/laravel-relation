<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Welcome, {{ $user->name }}</h1>
    <p>Your passport number : {{ $user->passport->passport_no }}</p>

    <h3>Forum List :</h3>
    <ul>
      @foreach ($user->forums as $forum)
        <li>{{ $forum->title }}</li>
      @endforeach
    </ul>
  </body>
</html>
