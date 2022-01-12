<?php
require_once "../connection/connection.php";
class Product{
    private $con;

    public function __construct(){

        $this->con = Connection::getConnection();

    }
    public function find($id){
        try {
            $stmt = $this->con->prepare("SELECT * FROM products WHERE id=:id LIMIT 1");
            $stmt->bindParam(":id",$id,PDO::PARAM_INT);
            $stmt->execute();
            
            return $stmt->fetch(PDO::FETCH_ASSOC);
          }
          catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
          }
    }
    public function get(){
        try {
            $stmt = $this->con->prepare("SELECT * FROM products");
            $stmt->execute();
            
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
          }
          catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
          }

    }
    public function add($product){
        try {
            $stmt = $this->con->prepare("INSERT INTO products(name, description, min_order, dimentions, id_category, thumbnail, gallery) VALUES (:name, :description, :min_order, :dimentions, :id_category, :thumbnail, :gallery)");
            $stmt->bindParam(":name",$product['name'],PDO::PARAM_STR);
            $stmt->bindParam(":description",$product['description'],PDO::PARAM_STR);
            $stmt->bindParam(":min_order",$product['min_order'],PDO::PARAM_INT);
            $stmt->bindParam(":dimentions",$product['dimentions'],PDO::PARAM_STR);
            $stmt->bindParam(":id_category",$product['id_category'],PDO::PARAM_INT);
            $stmt->bindParam(":thumbnail",$product['thumbnail'],PDO::PARAM_STR);
            $stmt->bindParam(":gallery",$product['gallery'],PDO::PARAM_STR);
            $stmt->execute();
            $product['id'] = $this->con->lastInsertId();
            return $product;
          }
          catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
          }
    }
    public function update($product,$id){
        try {
            $stmt = $this->con->prepare("UPDATE products SET name=:name, description= :description, min_order= :min_order, dimentions= :dimentions, id_category= :id_category, thumbnail= :thumbnail, gallery= :gallery WHERE id= :id");
            $stmt->bindParam(":name",$product['name'],PDO::PARAM_STR);
            $stmt->bindParam(":description",$product['description'],PDO::PARAM_STR);
            $stmt->bindParam(":min_order",$product['min_order'],PDO::PARAM_INT);
            $stmt->bindParam(":dimentions",$product['dimentions'],PDO::PARAM_STR);
            $stmt->bindParam(":id_category",$product['id_category'],PDO::PARAM_INT);
            $stmt->bindParam(":thumbnail",$product['thumbnail'],PDO::PARAM_STR);
            $stmt->bindParam(":gallery",$product['gallery'],PDO::PARAM_STR);
            $stmt->bindParam(":id",$id,PDO::PARAM_INT);
            return $stmt->execute();
          }
          catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
          }
    }
    public function delete($id){
        try {
            $stmt = $this->con->prepare("DELETE FROM products WHERE id=:id");
            $stmt->bindParam(':id',$id,PDO::PARAM_INT);
            return $stmt->execute();
          }
          catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
          }
    }
}