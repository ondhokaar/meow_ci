<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Controllers;
use App\Models\HealthModel;

/**
 * Description of Health
 *
 * @author shabbir
 */
class Health extends \CodeIgniter\Controller {
    //put your code here
    public $mydb;
    public function __construct() {
        $this->mydb = new HealthModel();
    }
    
    public function index() {

        
        //$table = new \CodeIgniter\View\Table();
        
        //echo $table -> generate($this->mydb->listAllVets());
        $data['allvets'] = $this->mydb->listAllVets();
        return view('health_view', $data);
    }
}
