<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
       <div class="container">
        <header>
            
            <img src="https://picsum.photos/200/300" alt="">
            <div class="tieude">
                <a href=""></a>
            </div>
        </header>
        <nav>
            <ul>
                <li><a href="">Trang chủ</a></li>
                <li><a href="{{route('a')}}">số lượng</a></li>
                <li><a href="">Bình luận đánh giá</a></li>
                 <li><a href="">Giỏ hàng</a></li>

            </ul>
        </nav>
        <div class="nd">
        <table border="1">
     <a href="{{route('add-product')}}">Thêm</a>
@foreach($products as $key => $v)
<tr>
        <td>{{  $v->id }}</td>
        <td>{{ $v->tensp}}</td>
        <td>{{  $v->img}}</td>
        <td>{{  $v->mota }}</td>
        <td>{{  $v->price }}</td>
        
        
       
        <td><a href="">Sửa</a></td>
        <td><a href="" onclick="return confirm('Bạn có chắc muốn xóa')">Xóa</a></td>
      </tr>

@endforeach
    </table>
        </div>
       </div>


</body>
</html>
  