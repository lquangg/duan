<?php
 namespace App\Models;
 class Product extends BaseModel{
    protected $table= "product";
    public function getProduct(){
        $sql="select * from  $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function addProduct($id,$tensp,$img,$mota,$price,$size){
        $sql="insert into $this->table value(?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute([$id,$tensp,$img,$mota,$price,$size]);
    }
    public function deleteProduct($id){
        $sql="delete * from $this->table where id=?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
 }

?>