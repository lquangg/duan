

<h2 class="giua">Chi tiết sản phẩm </h2>
          <div class="k1">
                
               
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
     
              


<div class="">
        <?php
          echo '<h2>'.$name.'</h2>
          <h1>'.$price.'</h1> 
                      
           

          ';
        ?>
    <h1>Size:</h1>
    <div class="k1">
    <button>38</button>
    <button>39</button>
    <button>40</button>
    <button>41</button>
    <button>42</button>
    </div>
    <form action="index.php?act=giohang" method="post">
      <input type="hidden" name="id" value="'.$id.'">
      <input type="hidden" name="img" value="'.$img.'">

      <input type="hidden" name="name" value="'.$name.'">

      <input type="hidden" name="price" value="'.$price.'">

      <input type="submit" name="giohang" value="Thêm vào giỏ hàng">

    </form>
  
  <button>Đặt mua</button> 
        </div>   



                
        
     
           


</div>
