<?php 
include "model/product.php";
class kartunController extends ProductModel {
    public function getKartun(){
        return $this->findAll();
    }

    public function getKartunBy(){
        if(!isset($_GET['id'])){
            return;
        }
        $onlyId = preg_replace('/\D/', '', $_GET['id']);
        if($onlyId !== ''){
            return $this->findOne($_GET['id']);
        }
    }
}
?>