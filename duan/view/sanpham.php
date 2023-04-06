<div class="ndtrai">
<div class="sp">     
                    
                    <?php
$i=0;

 foreach($dssp as $sp){
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
