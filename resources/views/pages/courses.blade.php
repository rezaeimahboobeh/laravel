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
    <h1 class="text-center text-danger" style="font-family:sans-serif">نام دوره ها</h1>
<br>
    <table class="table table-striped " dir="rtl" style="font-family:sans-serif">
      <thead >
        <th dir="rtl" class="text-right" >نام دوره</th>

      </thead>
      <tbody>
        @foreach ($courses as $course)
          <tr>
            <td class="col-lg-4"><a href="{{action('bookController@ID', $course->id) }}">{{$course->courseName}}</td>

          </tr>

@endforeach
      </tbody>
    </table>
  </body>
</html>
