<?php
namespace Goods\Controllers;

// /
use Goods\Db\GoodDb;
use Goods\Controller;


class IndexController extends Controller
{
    private $goodDB;

    public function __construct(){
        $this->goodDB = new GoodDb();
    }

    public function index(){
        $data = [];
        $data['goods'] = $this->goodDB->getGoods();
        $data['categories'] = $this->goodDB->getCategories();
        echo $this->getTemplate('main.php', $data);
    }
}