<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Controllers;
use App\Models\KittenModel;
/**
 * Description of Kittens
 *
 * @author shabbir
 */
class Kittens extends \CodeIgniter\Controller {
    //put your code here
    public $mydb;
    public function __construct() {
        $this->mydb = new KittenModel();
    }
    public function index() {
        return view('kittens_view');
    }
}
