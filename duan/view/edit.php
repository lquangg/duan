
<style>
        .a{
            text-align: center;
               background-color: aqua ;
            

        }
        .b{
            text-align: center;
        }
    
    </style>
</head>
<body>
    <?php
     if(isset($_SESSION['username'])&&(is_array($_SESSION['username']))){
        extract($_SESSION['username']);
     }
    ?>
             <div class="a">
                  <h1 class="b">Cập nhật thông tin </h1>
                  <form action="index.php?act=edit" method="post">
                user : <input type="text" name="username" value="<?=$username?>"><br>
                pass : <input type="password" name="pass" value="<?=$pass?>"><br>
                sdt : <input type="text" name="sdt" value="<?=$sdt?>"><br>
                email : <input type="email" name="email" value="<?=$email?>"><br>
                diachi : <input type="address" name="address" value="<?=$address?>"><br>
              <input type="hidden" name="id" id="" value="<?=$id?>">
                <input class="b" type="submit" name="edit" value="Cập nhật" id=""><br>
                <a class="b" href="index.php">Quay lại trang chủ</a><br>
                  </form>


                  <?php
                    if(isset($thongbao)&&($thongbao !="")){
                        echo $thongbao;
                    }
                  ?>
             </div>

