<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="/update" method="post">
      @csrf
      <input type="text" name="title" value="{{$title}}">
      <input type="text" name="id" value="{{$id}}">
      <input type="submit" value="Edit">
    </form>
  </body>
</html>
