<?php
function insert_sanpham($ten,$gia,$filename,$mota,$iddm){
    $sql="insert into sanpham(name,price,img,mota,iddm) values('$ten','$gia','$filename','$mota','$iddm')";
            pdo_execute($sql);
}
function delete_sanpham($id){
    $sql="delete from sanpham where id=".$_GET['id'];
    pdo_execute($sql);
}
function loadall_sanpham_home(){
    $sql="select * from sanpham where 1 order by id desc limit 0,9";
    
               $lissanpham=pdo_query($sql);
               return $lissanpham;
    
}
function loadall_sanpham($kyw="",$iddm=0){
    $sql="select * from sanpham where 1";
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
              $sql.=" order by id desc";
               $lissanpham=pdo_query($sql);
               return $lissanpham;
    
}
function loadone_sanpham($id){
    $sql="select * from sanpham where id=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}
function  update_sanpham($iddm,$id,$tensp, $price,$mota,$img){
    if($img!="")
       $sql="update sanpham set name='".$tensp."',iddm='".$iddm."',price='".$price."',mota='".$mota."',img='".$img."' where id=".$id;
       else
       $sql="update sanpham set name='".$tensp."',iddm='".$iddm."',price='".$price."',mota='".$mota."'  where id=".$id;
    pdo_execute($sql);
}
?>