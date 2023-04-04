<?php
if(is_array($sanpham)){
    extract($sanpham);
}
$imgpath="../upload/".$img;
     if(is_file($imgpath)){
    $img="<img src='".$imgpath."' height='80'>";
       }else{
       $img="No photo";
                       }
?>

<div class="row">
            <div class="h">
                <h2>Cập nhật  sản phẩm</h2>
            </div>
            <div class="row cont">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                <div class="row mabot">
                  <select name="iddm" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php
                          foreach ($lisdanhmuc as $danhmuc){
                            extract($danhmuc);
                            if($iddm==$id) echo '<option value="'.$id.'" selected>'.$name.'</option>';

                            else echo '<option value="'.$id.'">'.$name.'</option>';

                          }

                        
                    ?>
                   
                  </select>
                </div>   
            
                    <div class="row mabot">
                  Tên sản phẩm: <br> <input class="q" type="text" name="tensp"  value="<?=$name?>">
                    </div>
                    <div class="row mabot">
                  Giá: <br> <input class="q" type="text" name="prince"   value="<?=$price?>">
                    </div>
                    <div class="row mabot">
                  Ảnh: <br> <input class="q" type="file" name="img" >
                  <?php echo $img ?>
                    </div>
                    <div class="row mabot">
                  Mô tả: <br> <textarea name="mota" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="row q ">
                      <input type="hidden" name="id" value="<?=$id ?>">
                        <input type="submit"  name="capnhat" value="Cập nhật">
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