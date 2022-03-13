<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Controllers;
use App\Models\FosterHomeModel;

/**
 * Description of FosterHome
 *
 * @author shabbir
 */
class FosterHome extends \CodeIgniter\Controller {
    //put your code here
    public $mydb;
    public function __construct() {
        helper('form');
        $this->mydb = new FosterHomeModel();
    }
    
    public function index(){
        return view('fosterHome_view');
    }
}
