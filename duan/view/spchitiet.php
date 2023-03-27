
<div class="k mabot">
            
            <div class="row trai  row1 ">
                <h2 class="a">Chi tiết sản phẩm </h2>
               <div class="nu k ">
                <div class="  ">
                 <div class="">
                  
                    
                  
<?php
$i=0;
 
    extract($onesp);
    $img=$img_path.$img;
    
   
   
    echo  '
   
        <img src="'.$img.'" alt="">

     ';
     

?>
  
</div>
     </div>
               </div>
  
</div>

<div class="phai mabot">
        <?php
          echo '<h2>'.$name.'</h2>
          <h1>'.$price.'</h1> 
                      
           

          ';
        ?>
    <h1>Size:</h1>
    <div class="k1">
    <button>40</button>
    <button>40</button>
    <button>40</button>
    <button>40</button>
    <button>40</button>
    </div>
  <button>Thêm vào  Giỏ hàng</button> 
  <button>Đặt mua</button> 
        </div>   



                
        
        <div class="phai mabot">
           <?php
           include "boxphai.php";
           ?>
</div>

</div>