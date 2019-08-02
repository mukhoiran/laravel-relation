<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Tag list :</h1>
    <ul>
      @foreach ($forum->tags as $tag)
        <li>{{ $tag->name }}</li>
      @endforeach
    </ul>
  </body>
</html>
