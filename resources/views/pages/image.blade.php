<!DOCTYPE html>
<html lang="fa" dir="rtl">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body class="bg-info">
    @foreach ($address as $addres)
<div align="center">
  <img src="{{$addres->name}}" class="img-thumbnail" ></img>
</div>



    @endforeach
  </body>
</html>
