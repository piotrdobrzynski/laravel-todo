<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @if(session('success'))
      <h1>{{session('success')}}</h1>
    @endif

    <form action="/upload" method="post">
      @csrf
      <input type="text" name="title">
      <input type="submit" value="Create">
    </form>

    @foreach($todos as $todo)
    <li style="color: @if($todo->completed) green @else red @endif ";>
      <a href="/change/{{$todo->id}}">{{$todo->title}}</a>
      <br />
      <a href="/edit/{{$todo->id}}">edit</a>
    </li>
    @endforeach
  </body>
</html>
