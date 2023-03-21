<?php
 namespace App\Controllers;
 use App\Models\Soluong;
 class SoluongController extends BaseController{
    public $product;
    public function __construct()
    {
     $this->product = new Soluong();
    }
    public function index(){
      $pro = $this->product->getCate();
      $this->render('cate.index',compact('pro'));
    }
 }
?>