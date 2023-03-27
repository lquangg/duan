
<div class="k mabot">
            
            <div class="row trai  row1 ">
                <h2 class="a" >Phông nền chạy </h2>
               <div class="nu k ">
                <div class="nd mabot   ">
                 <div class="">
                  
                    
                  
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
    <div class="im  ">
     <img src="'.$img.'" alt="">
     </div>
     <div >
     <a href="'.$linksp.'">'.$name.'</a>
         <p>$'.$price.'</p>
     </div>

 
 

     ';
     


 }
?>
                 </div>
     </div>
               </div>
            
</div>




<!-- <div class="k mabot">
            
            <div class="row trai   row1 ">
                <h2 class="a">Một số loại đồ uống </h2>
               <div class="nu">
                <div class="nd mabot ">
                 
                   <div  >
                    <div class="im">
                    <img src="view/img/2.jpg" alt="">
                    </div>
                    <div class="tt">
                        <p>Cà phê sữa</p>
                        <p>30.000 vnđ</p>
                    </div>
               
                </div>
                
                </div>
                
                <div class="nd mabot ">
                 
                    <div>
                     <div class="im">
                     <img src="view/img/10.jpg" alt="">
                     </div>
                     <div class="tt">
                         <p>Cà phê </p>
                         <p>30.000 vnđ</p>
                     </div>
                
                 </div>
                 
                 </div>
                 
                 <div class="nd mabot">
                 
                    <div>
                     <div class="im">
                     <img src="view/img/3.jpg" alt="">
                     </div>
                     <div class="tt">
                         <p>bạc sỉu</p>
                         <p>30.000 vnđ</p>
                     </div>
                
                 
                 
                 </div>
                 </div>
                 

                 
               </div>
               <div class="nu">
                <div class="nd mabot ">
                 
                   <div  >
                    <div class="im">
                    <img src="view/img/2.jpg" alt="">
                    </div>
                    <div class="tt">
                        <p>Cà phê sữa</p>
                        <p>30.000 vnđ</p>
                    </div>
               
                </div>
                
                </div>
                
                <div class="nd mabot ">
                 
                    <div>
                     <div class="im">
                     <img src="view/img/10.jpg" alt="">
                     </div>
                     <div class="tt">
                         <p>Cà phê </p>
                         <p>30.000 vnđ</p>
                     </div>
                
                 </div>
                 
                 </div>
                 
                 
                 <div class="nd mabot">
                 
                    <div>
                     <div class="im">
                     <img src="view/img/3.jpg" alt="">
                     </div>
                     <div class="tt">
                         <p>bạc sỉu</p>
                         <p>30.000 vnđ</p>
                     </div>
                
                 
                 
                 </div>
                 
                 </div>
               </div>
               <div class="nu">
                <div class="nd mabot ">
                 
                   <div  >
                    <div class="im">
                    <img src="view/img/2.jpg" alt="">
                    </div>
                    <div class="tt">
                        <p>Cà phê sữa</p>
                        <p>30.000 vnđ</p>
                    </div>
               
                </div>
                
                </div>
                
                <div class="nd mabot ">
                 
                    <div>
                     <div class="im">
                     <img src="view/img/10.jpg" alt="">
                     </div>
                     <div class="tt">
                         <p>Cà phê </p>
                         <p>30.000 vnđ</p>
                     </div>
                
                 </div>
                 
                 </div>
                 
                 <div class="nd mabot">
                 
                    <div>
                     <div class="im">
                     <img src="view/img/3.jpg" alt="">
                     </div>
                     <div class="tt">
                         <p>bạc sỉu</p>
                         <p>30.000 vnđ</p>
                     </div>
                
                 
                 
                 </div>
                 </div>
                 

                 
               </div>
            </div>-->
                 
            
            

    
               
                
        
        <div class="phai mabot">
            <!-- <div class="tk">
                <h3>Tài khoản</h3>
               </div>
               <div class="ab abc">
                <form action="#" method="post">
                    Tên đăng nhập: <br>
                    <input type="text" name="user"><br> Mật khẩu<br>
                    <input type="password" name="pass"><br>
                    <input type="checkbox" name="" id=""> Ghi nhớ tài khoản?<br>
                    <input type="submit" value="Đăng nhập">
                    
                </form>
                <li>
                    <a href="#">Quên mật khẩu</a>
                </li>
                <li>
                    <a href="#">Đăng kí mới</a>
                </li>
               </div>  -->



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
               <!-- <div class="tk">
                <h3>Danh mục</h3>

               </div>
               <div class="ab ">
                <div class="c">
                    <p>cà phê</p>
                </div>
                <div class="c">
                <p>Trà sữa</p>
               </div>
               <div class="c">
               <p>Trà chanh</p>
               </div>
               <div class="c">
               <p>Đồ ăn vặt</p>
               </div> -->
               
        </div>
        
     </div>
        </div>
     
</div>

</div>