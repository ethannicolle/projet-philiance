<?php

class Products {

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getProducts(){

        $sql = "SELECT * FROM products";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();

    }

    public function getProductsByCategory($category) {
        $sql = 'SELECT * FROM products WHERE category = :category';
        $query = $this->db->prepare($sql);
        $query->bindValue(':category', $category);
        $query->execute();

        return $query->fetchAll();
    }

    public function getProduct($id) {

        if(!$this->productExists($id)) return false;
        
        $sql = 'SELECT * FROM products WHERE id = :id';
        $query = $this->db->prepare($sql);
        $query->bindValue(':id', $id);
        $query->execute();

        return $query->fetch();
    }

    private function productExists($id)
    {

        $sql = 'SELECT COUNT(*) FROM products WHERE id = :id';
        $query = $this->db->prepare($sql);
        $query->bindValue(':id', $id);
        $query->execute();

        return ($query->fetchColumn() > 0);
    }

}