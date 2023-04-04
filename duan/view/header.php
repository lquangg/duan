<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/quang.css">
    <title>Document</title>
</head>

<body>
    <div class="container">

        <header>
            <div class="logo">
                <a href="index.php"><img width="50%" src="view/img/logo.png" alt=""></a>
            </div>
           
            <nav>
                

                <ul>


                    <li><a href=" index.php?act=gioithieu">Giới thiệu</a></li>
                    <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                    <li><a href="index.php?act=gopy">Góp ý </a></li>
                    <li><a href="index.php?act=hoidap">Hỏi đáp</a></li>
                    <li><a href="">Tài khoản</a>
                    
                        <ul class="submenu">
                        <?php
                               if(isset($_SESSION['username'])&&(is_array($_SESSION['username']))){
                                extract($_SESSION['username']);
                               
                    ?>
                    <?=$username?>
                    
                            <li><a href="index.php?act=edit">Cập nhât tài khoản</a> </li>
                              
                            <li><a href="index.php?act=thoat">Thoát</a> </li>
                            <?php
                                 if($role==1){  
                            ?>
                            <li><a href="http://localhost/DUAN/admin/">admin</a> </li>
                            <?php }
                            ?>
                   <?php
                               }else{
                                ?>
                            <li><a href="index.php?act=dangnhap">Đăng nhập</a> </li>
                            <li><a href="index.php?act=dangki">Đăng Kí</a> </li>
                            <?php }
                            ?>
                        </ul>
                    </li>
                    
                    <li><a href="index.php?act=giohang">Giỏ hàng</a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                        </svg>
                    </li>



                </ul>
            </nav>
        </header>


        <!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="view/css/quang.css">
</head>
<body>
   <div class="container">
      <img src="img/logo.png" alt="">
      <nav>
              
              
                <ul>
                
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href=" index.php?act=gioithieu">Giới thiệu</a></li>
                <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                <li><a href="index.php?act=gopy">Góp ý </a></li>
                <li><a href="index.php?act=hoidap">Hỏi đáp</a></li>
                <li><a href="index.php?act=hoidap">Tài khoản</a></li>
                </ul>
             </nav>
   -->