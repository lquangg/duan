<?php
 namespace App\Controllers;
 use App\Models\Product;
use Illuminate\Support\Facades\Redirect;

 class ProductController extends BaseController{
   public $product;
    public function __construct()
    {
     $this->product = new Product();
    }
    public function index(){
      $products = $this->product->getProduct();
      $this->render('product.index',compact('products'));
    }
    public function add(){
      $this->render('product.add');
    }
    public function addPost(){
      if(isset($_POST['them'])){
        
        
        $result= $this->product->addProduct(NULL,$_POST['tensp'],$_POST['img'],$_POST['mota'],$_POST['price'],$_POST['size']);
        if($result){
          redirect('','','test');
        }
      }
    }
   
 }

?>