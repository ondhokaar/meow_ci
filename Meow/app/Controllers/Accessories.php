<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Controllers;
use App\Models\AccessoriesModel;
use App\Models\LoginModel;
/**
 * Description of Accessories
 *
 * @author shabbir
 */
class Accessories extends \CodeIgniter\Controller {
    //put your code here
    public $mydb;
    public function __construct() {
        $this->mydb = new LoginModel();
    }
    public function index() {
        
        
        $data['temps'] =  $this->mydb->rem();
        return view('accessories_view', $data);
    }
}
