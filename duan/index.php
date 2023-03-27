<?php
 include "view/header.php";
 include "model/pdo.php";
 include "model/danhmuc.php";
 include "model/sanpham.php";
 include "global.php";
 $spnew=loadall_sanpham_home();
 $dsdm=loadall_danhmuc();
 if(isset($_GET['act']) &&($_GET['act']!="")){
    $act=$_GET['act'];
    switch ($act){
        case 'gioithieu':
              include "view/gt.php";
            break;
        case 'spchitiet':
            if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
               $id=$_GET['idsp'];
                 $onesp=loadone_sanpham($id);
            include "view/spchitiet.php";
            }else{
                include "view/home.php";
            }
            break;

        case 'lienhe':
            include "view/lh.php";

             break;
            default:
            include "view/home.php";
            break;

    }
 }else{
 include "view/home.php";
 }
 include "view/footer.php";

?>