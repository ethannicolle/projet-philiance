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

}