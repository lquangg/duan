<?php
session_start();
 include "view/header.php";
 include "model/pdo.php";
 include "model/danhmuc.php";
 include "model/sanpham.php";
 include "model/taikhoan.php";
 include "global.php";
 if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];
 $spnew=loadall_sanpham_home();
 $dsdm=loadall_danhmuc();
 if(isset($_GET['act']) &&($_GET['act']!="")){
    $act=$_GET['act'];
    switch ($act){
        case 'gioithieu':
              include "view/gt.php";
            break;
            case 'sanpham':
                
                if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                 $kyw=$_POST['kyw'];
                }else{
                    $kyw="";
                }
                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                   $iddm=$_GET['iddm'];
                   
                }else{
                    $iddm=0;
                }
                $dssp=loadall_sanpham($kyw,$iddm);
                $tendm=loadten($iddm);
                include "view/sanpham.php";
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

            break;
         case 'dangnhap': 
            if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                $username=$_POST['username'];
                $pass=$_POST['pass'];
               
                 $checkuser=checkuser($username,$pass);
                 if(is_array($checkuser)){
                    $_SESSION['username']=$checkuser;
                    header('location:index.php');
                    $thongbao="đăng kí thành công"; 
                 }
                
            }
            include "view/dangnhap.php";
            break;
            case 'dangki': 
                if(isset($_POST['dangki'])&&($_POST['dangki'])){
                    $username=$_POST['user'];
                    $pass=$_POST['pass'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];
                    $sdt=$_POST['sdt'];
                   insert_taikhoan($username,$pass,$email,$address,$sdt);
                   $thongbao="đăng kí thành công"; 
                }
                include "view/dangki.php";
                break; 
                case 'quenmk': 
                    if(isset($_POST['quenmk'])&&($_POST['quenmk'])){
                       
                        $email=$_POST['email'];
                       $checkquenmk=checkquenmk($email);
                       if(is_array($checkquenmk)){
                        $thongbao="Mật khẩu của bạn là".$checkquenmk['pass'];
                       }else{
                        $thongbao="không tồn tại";
                       }
                      
                       $thongbao="đăng kí thành công"; 
                    }
                    include "view/quenmk.php";
                    break; 
                case 'edit': 
                    if(isset($_POST['edit'])&&($_POST['edit'])){
                        $username=$_POST['username'];
                        $pass=$_POST['pass'];
                        $email=$_POST['email'];
                        $address=$_POST['address'];
                        $sdt=$_POST['sdt'];
                        $id=$_POST['id'];
                        update($id,$username,$pass,$email,$address,$sdt);
                        $_SESSION=checkuser($username,$pass);
                        header('location:index.php');
                       $thongbao="cập nhật thành công"; 
                    }
                    include "view/edit.php";
                    break; 
                
                   
                case 'giohang':
                    
                    if(isset($_POST['giohang'])&&($_POST['giohang'])){
                       $id=$_POST['id'];
                        $name=$_POST['name'];
                        $price=$_POST['price'];
                        $img=$_POST['img'];
                            $soluong=1;
                            
                       $spadd=[$id,$name,$img,$price,$soluong];
                       array_push($_SESSION['mycart'],$spadd);
                    //    var_dump($_SESSION['mycart']) ;
                    //    die();

                    }
                include "view/giohang.php";
                break; 
                case 'thoat':
                    session_unset();
                    header('location:index.php');
                    break; 
    }
 }else{
 include "view/home.php";
 }
 include "view/footer.php";

?>