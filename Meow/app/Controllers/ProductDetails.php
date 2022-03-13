<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Controllers;
use App\Models\AccessoriesModel;
use App\Models\KittenModel;
/**
 * Description of ProductDetails
 *
 * @author shabbir
 */
class ProductDetails extends \CodeIgniter\Controller {
    //put your code here
    public $kitten_tbl;
    public $accessories_tbl;
    public function __construct() {
        $this->kitten_tbl = new KittenModel();
        $this->accessories_tbl = new AccessoriesModel();
    }
    public function index($tablename, $pid) {
        //search by pid
        if($tablename == 'kittens') {
            //use $kitten_tbl;
        }
        else if($tablename == 'accessories') {
            //use $accessories_tbl;
        }
    }
}
