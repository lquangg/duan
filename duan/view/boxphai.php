


<div class="tk">
                <h3>Danh mục</h3>

               </div>
               <div class="ab ">
                
               <?php
        foreach($dsdm as $dm){
            extract($dm);
            $linkdm="index.php?act=sanpham&iddm=".$id;
            echo ' 
            <div>
            <a href="'.$linkdm.'">'.$name.'</a>
           </div>';

        }
               ?>
                
               </div>
               
               
        </div>
        
     </div>
        </div>
     
</div>