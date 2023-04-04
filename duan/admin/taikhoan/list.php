<div class="row">
            <div class="h">
                <h2>Danh sách  tài khoản khách hàng</h2>
            </div>
          
                <table border="1">
                    <tr>
                        
                        <th>user</th>
                        <th>pass</th>
                        <th>email</th>
                        <th>address</th>
                        <th>sdt</th>
                        <th>Chức năng</th>

                   
                        
                       
                    </tr> 
                    <?php
                    foreach($listk as $tk){
                        var_dump($tk);
                        die();
                        extract($tk);
                          $suatk="index.php?act=suatk".$id;
                          $xoatk="index.php?act=xoatk".$id;
                        echo ' <tr>
                       
                        <td>'.$id.'</td>
                        <td>'.$username.'</td>
                        <td>'.$pass.'</td>
                        <td>'.$email.'</td>
                        <td>'.$address.'</td>
                        <td>'.$sdt.'</td>
                       
                        <td><a href="'.$suatk.'"><input type="submit" value="Sửa"></a>  <a href="'.$xoatk.'"><input type="submit" value="Xóa"></a></td>
                    </tr>';
                    }
                    ?>
                    
                </table>
            </div>
            
          </div>
        </div>