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

       foreach($_SESSION['mycart']  as $a ){
       var_dump($a);
       die();
    
        
       
        $tong+=$tt;
        
          echo '  <tr>
                <td><img src="'.$img.'"  alt=""></td>
               
            </tr>';
       
       
       }
       ?>

      </table>
       
</body>
</html>