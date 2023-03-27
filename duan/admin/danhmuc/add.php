<div class="row">
            <div class="h">
                <h2>Thêm mới  loaji sản phẩm</h2>
            </div>
            <div class="row cont">
                <form action="index.php?act=adddm" method="post">
                    <div class="row mabot ">
                  Mã loại:<br> <input class="q" type="text" name="maloai" >
                    </div>
                    <div class="row mabot">
                  Tên loại: <br> <input class="q" type="text" name="tenloai" >
                    </div>
                    <div class="row q ">
                        <input type="submit"  name="themmoi" value="Thêm mới">
                        <input type="button" value="Nhập lại ">
                      <a href="index.php?act=lisdm">  <input type="button" value="Danh sách">
                   
                      </a> </div>
                      <?php
                      if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
                      ?>
                </form>
            </div>
        </div>

    </div>