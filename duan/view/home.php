

         <div class="banner">
            <img width="100%" id="img" onclick="changImage()" src="view/img/mlb2.webp" alt="">
         </div>
         <script>
    var index=1;
    function changImage(){
        var imgs =["view/img/mlb2.webp","view/img/ban2.webp","view/img/abc.jpg"];
        document.getElementById('img').src=imgs[index];
        index++;
        if(index==3){
         index=0;
        }
    }
</script>
         <div class="danhm">
          
         <nav>
            <ul>
         <?php
        foreach($dsdm as $dm){
            extract($dm);
            $linkdm="index.php?act=sanpham&iddm=".$id;
            echo ' 
          
            <li><a href="'.$linkdm.'">'.$name.'</a></li>
         

       ' ;};

               ?>
               
                  <li> <div class="search">
                    <form action="index.php?act=sanpham" method="post">
                <input  type="text" name="search"  placeholder="Nhập..."><input type="submit" name="timki" value="Tìm Kiếm">
                    </form>
               </div>   </li>
                </ul>
               </nav>
          
               
               </div>
              
        </div>
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

                     
             
             <!-- <div class="ndphai">
             <div class="tk">
                <h3>Danh mục</h3>

               </div>
            -->
                

              
             

</div>
</div>



          
        
   