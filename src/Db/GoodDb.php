<?php

namespace Goods\Db;
use Goods\DBConnection;
use PDO;
class GoodDb
{
    private $connection;
    public function __construct(){
        $this->connection = DBConnection::getInstance()->getConnection();
    }
    public function getGoods(){
        // id, name_good, discripton, quantity, price, pic
        $sql = "SELECT * FROM good;";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getCategories(){
        $sql = "SELECT id_cat, name_cat FROM category;";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getGoodById($id){
        $sql = "SELECT id_good, name_good, discripton, quantity, price, pic FROM good WHERE id_good = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$id]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
    
    public function getGoodByCat($id){
        $sql = "SELECT * FROM  goods_category LEFT JOIN good 
        ON id_good = id_g 
        WHERE goods_category.id_c = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$id]);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
