
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
             <div class="a">
                  <h1 class="b"> Đăng Kí</h1>
                  <form action="" method="post">
                user : <input type="text" name="user"><br>
                pass : <input type="password" name="pass"><br>
                sdt : <input type="text" name="sdt"><br>
                email : <input type="email" name="email"><br>
                diachi : <input type="address" name="address"><br>

                <input class="b" type="submit" name="dangki" value="Đăng Kí" id=""><br>
                <a class="b" href="index.php">Quay lại trang chủ</a><br>
                  </form>


                  <?php
                    if(isset($thongbao)&&($thongbao !="")){
                        echo $thongbao;
                    }
                  ?>
             </div>

