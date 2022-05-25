<?php


namespace Goods\Controllers;


use Goods\Db\GoodDb;
use Goods\Controller;

class GoodController extends Controller
{
    private $goodDB;

    public function __construct(){
        $this->goodDB = new GoodDb();
    }

    public function showGood($id){
        $data = [];
        $data['good'] = $this->goodDB->getGoodById($id);
        $data['categories'] = $this->goodDB->getCategories();
        echo $this->getTemplate('good.php', $data);
    }
    public function showCategory($id){
        $data = [];
        $data['goods'] = $this->goodDB->getGoodByCat($id);
        $data['categories'] = $this->goodDB->getCategories();
        echo $this->getTemplate('category.php', $data);
    }
    public function addToBusket(){
        session_start(); 
            $post = $_POST;
            var_dump($post);
            // if (isset($_SESSION['busket'])) {
            // array_push($_SESSION['busket'],$post['id']);
            // } else {
                $_SESSION['busket'] = $post['id'];
                var_dump($_SESSION['busket']);
            // }
            if (isset($_SESSION['busket'])) {
                echo "Товар добавлен в корзину";
            } else {
                echo "Товар не добавлен в корзину";
            }
        }

    public function showBusket() {
        $data = [];
        $data['categories'] = $this->goodDB->getCategories();
        $goods = [];
        if (isset($_SESSION['busket'])){
            foreach($_SESSION['busket'] as $id) {
                array_push($goods, $this->goodDB->getGoodById($id));
            }
            $data['goods'] = $goods;
        } else {
            $data['message'] = 'Корзина пуста';
        }
        echo $this->getTemplate('busket.php', $data);
    }
}