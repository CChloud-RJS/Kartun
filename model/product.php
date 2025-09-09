<?php 
class ProductModel extends Connection {
    protected $nama;
    protected $episode;
    protected $rating;

    protected function findAll(){
        $sql = 'SELECT * FROM kartun';
        $result = $this->connect()->query($sql);
        if($result->num_rows >0){
            while ($data = mysqli_fetch_assoc($result)){
                $product[] = $data;
            }
            return $product;
        }
    }

    protected function findOne($id){
        $sql = 'SELECT * FROM kartun WHERE id = ' . $id;
        $result = $this->connect()->query($sql);
         if($result->num_rows >0){
            while ($data = mysqli_fetch_assoc($result)){
                $product[] = $data;
            }
            return $product;
        }
    }
}
?>