<div class="home">
<div class="ndtrai">
<div class="sp">     
                    
                    <?php
$i=0;

 foreach($spnew as $sp){
    extract($sp);
    $linksp="index.php?act=spchitiet&idsp=".$id;
    $img=$img_path.$img;
    
    if(($i==2)||($i==5)||($i==8)){
        $mr="mr";
    }else{
        $mr="";
    }
    echo  '
   
    <div class="ndsp">
     
     <img src="'.$img.'" alt="">
  
     
     <p class="giua"><a href="'.$linksp.'">'.$name.'</a></p>
        <div class="giua"> 
        <p>$'.$price.'</p>
        </div>
         </div>
    
         
        
 

     ';
     
    

 }
 
?>
    </div>
                    </div>

                     
             
             <div class="ndphai">
             <div class="tk">
                <h3>Danh mục</h3>

               </div>
           
                
               <?php
        foreach($dsdm as $dm){
            extract($dm);
            $linkdm="index.php?act=sanpham&iddm=".$id;
            echo ' 
            <div class="giua">
            <a href="'.$linkdm.'">'.$name.'</a>
           </div>';

        };
               ?>
              
             

</div>
</div>



          
        
   