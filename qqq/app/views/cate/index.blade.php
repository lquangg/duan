<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <table border="1">
          <tr>
            <td>Size</td>
            <td>Số lượng</td>
          </tr>
          @foreach($pro as $v)
          <tr>
            <td>{{$v->size}}</td>
            <td>{{$v->soluong}}</td>
          </tr>
          @endforeach
     </table>
</body>
</html>