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
    <title></title>
  </head>
  <body>
    <h1 class="text-center text-danger" style="font-family:sans-serif">شماره کتاب را انتخاب کنید</h1>
<br>
    <ul>
    @foreach ($address as $addres)
    <div class="col-lg-6">
       <li class="list-group-item text-center" style="font-family: 'Cairo', sans-serif"><a href="{{action('bookController@pic', $addres->bookID) }}">شماره کتاب :{{$addres->bookID}}</a></li>
    </div>

    @endforeach
    </ul>
  </body>
</html>
