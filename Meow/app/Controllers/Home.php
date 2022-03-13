<?php

namespace App\Controllers;

class Home extends \CodeIgniter\Controller {

    public function index($param) {
        echo $param;
//        $db = \Config\Database::connect();
//        
//        $query = $db -> query("select * from users");
//        
//        $table = new \CodeIgniter\View\Table();
//        
//        echo $table -> generate($query);
        return view('w');
    }

}
