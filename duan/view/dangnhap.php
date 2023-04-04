
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
                  <h3 class="b"> Đăng nhập</h3>
                  <form action="index.php?act=dangnhap" method="post">
                user : <input type="text" name="username"><br></br>
                pass : <input type="password" name="pass"><br></br>

                <input class="b" type="submit" name="dangnhap" value="Đăng nhập" id=""><br>
                <a class="b" href="index.php">Quay lại trang chủ</a><br>
                <a class="b" href="index.php?act=quenmk">Quên mật khẩu</a>
             </div>
    </form>
</body>
</html>

