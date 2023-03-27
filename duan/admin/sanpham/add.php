<div class="row">
            <div class="h">
                <h2>Thêm mới  sản phẩm</h2>
            </div>
            <div class="row cont">
             
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row mabot ">
                  sản phẩm thuộc loại<br>
                  <select name="iddm" id="">
                   <?php
                     foreach($lisdanhmuc as $danhmuc){
                      extract($danhmuc);
                      echo '<option value="'.$id.'">'.$name.'</option>';
                     }
                   ?>
                    
                  </select>
                    </div>
                    <div class="row mabot">
                  Tên sản phẩm: <br> <input class="q" type="text" name="tensp" >
                    </div>
                    <div class="row mabot">
                  Giá: <br> <input class="q" type="text" name="gia" >
                    </div>
                    <div class="row mabot">
                  Ảnh: <br> <input class="q" type="file" name="img" >
                    </div>
                    <div class="row mabot">
                  Mô tả: <br> <textarea  name="mota" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="row q ">
                        <input type="submit"  name="themmoi" value="Thêm mới">
                        <input type="button" value="Nhập lại ">
                      <a href="index.php?act=lissp">  <input type="button" value="Danh sách">
                   
                      </a> </div>
                      <?php
                      if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
                      ?>
                </form>
            </div>
        </div>

    </div>