<div class="row">
            <div class="h">
                <h2>Danh sách  hàng hóa</h2>
            </div>
          <div class="row cont   ">
            <div class="row ds1">
                <form action="index.php?act=lissp" method="post" class="row mabot">
                    <input type="text" name="kyw">
                    <select name="iddm" >
                        <option value="0" selected>Tất cả</option>
                        <?php
                        foreach($lisdanhmuc as $danhmuc){
                            extract($danhmuc);
                            echo'<option value="'.$id.'">'.$name.'</option> ';
                        }
                        ?>
                    </select>
                    <input type="submit" name="ok" value="Go">
                </form>
                <table>
                    <tr>
                        <th></th>
                        <th>Mã loại</th>
                        <th>Tên loại</th>
                        <th>Price</th>
                        <th>Ảnh</th>
                   
                        
                       
                    </tr> 
                    <?php
                    foreach($lissanpham as $sanpham){
                        extract($sanpham);
                       $suasp="index.php?act=suasp&id=".$id;
                       $xoasp="index.php?act=xoasp&id=".$id;
                       $imgpath="../upload/".$img;
                       if(is_file($imgpath)){
                        $img="<img src='".$imgpath."' height='80'>";
                       }else{
                        $img="No photo";
                       }
                        echo ' <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$price.'</td>
                        <td>'.$img.'</td>
                       
                        <td><a href="'.$suasp.'"><input type="submit" value="Sửa"></a>  <a href="'.$xoasp.'"><input type="submit" value="Xóa"></a></td>
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
                <a href="index.php?act=addsp"> <input type="button" value="Nhập thêm"></a>
            </div>
          </div>
        </div>