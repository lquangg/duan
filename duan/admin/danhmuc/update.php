<?php
if(is_array($dm)){
    extract($dm);
}
?>

<div class="row">
            <div class="h">
                <h2>Cập nhật  hàng hóa</h2>
            </div>
            <div class="row cont">
                <form action="index.php?act=updatedm" method="post">
                    <div class="row mabot ">
                  Mã loại:<br> <input class="q" type="text" name="maloai" >
                    </div>
                    <div class="row mabot">
                  Tên loại: <br> <input class="q" type="text" name="tenloai"  value="<?php if(isset($name)&&($name)!="") echo $name ?>">
                    </div>
                    <div class="row q ">
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id)!="") echo $id ?>">
                        <input type="submit"  name="capnhat" value="Cập nhật">
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