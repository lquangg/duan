<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('add-product-post')}}" method="post">
     Tên sp : <input type="text" name="tensp"><br>
     Ảnh : <input type="file" name="img" id=""><br>
     Mô tả: <input type="text" name="mota" ><br>
     Giá : <input type="text" name="price"><br>
     <input type="checkbox" name="size" id="" value="38">38
     <input type="checkbox" name="size" id="" value="38">39
     <input type="checkbox" name="size" id="" value="38">40
     <input type="checkbox" name="size" id="" value="38">41
     <input type="checkbox" name="size" id="" value="38">42
     Số lượng: <input type="text" name="soluong"><br>
     <input type="submit" name="them" value="Thêm">
    </form>
</body>
</html>