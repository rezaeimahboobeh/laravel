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
  <body >

<h1 style="font-family:sans-serif"  class="text-center text-danger">مشخصات دوره</h1>
<table class="table table-striped" style="font-family:sans-serif">
  <th dir="rtl" class="text-right bg-info">نام دوره</th>
  <th dir="rtl" class="text-right bg-info">نام استاد</th>
  <th dir="rtl" class="text-right bg-info">نوع دوره</th>
  <th dir="rtl" class="text-right bg-info">ظرفیت</th>
    <th dir="rtl" class="text-right bg-info">هزینه</th>
  <tbody>
      @foreach ($courseid as $coursei)
    <tr>
      <td>{{$coursei->courseName}}</td>
      <td>{{$coursei->teachername}}</td>
      <td>{{$coursei->courseTypeName}}</td>
        <td>{{$coursei->capacity}}</td>
        <td>{{$coursei->price}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</body>
</html>
