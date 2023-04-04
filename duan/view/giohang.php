<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .a{
            text-align: center;
            background-origin: padding-box;
            width: 100%;
        }
        .b{
            text-align: center;
            background-color: red;
        }

    </style>
</head>
<body>
      <table class="a" >
        <tr>
            <td>id</td>
            <td>Sản phẩm</td>
            <td>Giá </td>
            <td>Số lượng</td>
            <td>Tạm tính</td>
            <td>Chức năng</td>
        </tr>
        <?php
       foreach($_SESSION['mycart'] as $a){
        $hinh=$img_path.$a[2];
        $tt=$a[3]*$a[4];
        $tong+=$tt;
        
          echo '  <tr>
                <td><img src="'.$img.'" width="50%" alt=""></td>
                <td>'.$a[1].' </td>
                <td>'.$a[3].'</td>
                <td>'.$a[4].'</td>
                <td>'.$tt.'</td>
            </tr>';
       
       }
       echo '  <td>'.$tong.' </td>'
       ?>

      </table>
       <button class="b">Thanh toán</button>
</body>
</html>