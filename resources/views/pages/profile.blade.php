<!DOCTYPE html>
<html lang="fa" dir="ltr" >
<meta charset="utf-8" http-equiv="Content-Type">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <head>
    <meta charset="utf-8">
    <title>درس ها</title>
  </head>
  <body>
    @if (auth::check())


    <h1 class="text-center text-danger" style="font-family:sans-serif">پروفایل شما</h1>
<br>
  <div class="text-right">

@foreach($name as $nam)

    {{$nam->name}}
@endforeach
  </div>
  @else
    You are not signed in.
  @endif


  </body>
</html>
