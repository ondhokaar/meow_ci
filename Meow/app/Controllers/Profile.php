<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Controllers;
use App\Models\ProfileModel;
/**
 * Description of Profile
 *
 * @author shabbir
 */
class Profile extends \CodeIgniter\Controller{
    //put your code here
    public $mydb;
    public function __construct() {
        //$this -> mydb = new ProfileModel();
    }

    public function index() {
        
        return view('profile_view');
    }
}
