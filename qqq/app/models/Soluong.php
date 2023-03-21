<?php
  namespace App\Models;
  class Soluong extends BaseModel{
        protected $table="soluong";
       public function getCate(){
        $sql="select * from $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
       }  
  }

?>