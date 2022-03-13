<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Controllers;

/**
 * Description of ProductDetails
 *
 * @author shabbir
 */
class ProductDetails extends \CodeIgniter\Controller {
    //put your code here
    public function __construct() {
        ;
    }
    public function index($tablename, $pid) {
        echo "show me id=".$pid." from ".$tablename." table";
    }
}
