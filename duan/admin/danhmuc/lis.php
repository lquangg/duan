<div class="row">
            <div class="h">
                <h2>Danh sách  loại sp</h2>
            </div>
          <div class="row cont   ">
            <div class="row ds1">
                <table>
                    <tr>
                        <th></th>
                        <th>Mã loại</th>
                        <th>Tên loại</th>
                        <th></th>
                    </tr> 
                    <?php
                    foreach($lisdanhmuc as $danhmuc){
                        extract($danhmuc);
                       $suadm="index.php?act=suadm&id=".$id;
                       $xoadm="index.php?act=xoadm&id=".$id;
                        echo ' <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td><a href="'.$suadm.'"><input type="submit" value="Sửa"></a>  <a href="'.$xoadm.'"><input type="submit" value="Xóa"></a></td>
                    </tr>';
                    }
                    ?>
                    
                </table>
            </div>
            <div class="row mabot">
                <input type="button" value="Chọn tất cả">
                <input type="button" value=" Bỏ Chọn tất cả">
                <input type="button" value="Xóa các mục đã chọn">
                <input type="button" value="Chọn tất cả">
                <a href="index.php?act=adddm"> <input type="button" value="Nhập thêm"></a>
            </div>
          </div>
        </div>