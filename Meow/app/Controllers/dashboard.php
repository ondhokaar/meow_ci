<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Controllers;

/**
 * Description of dashboard
 *
 * @author shabbir
 */
class dashboard extends \CodeIgniter\Controller {
    //put your code here
    public function index() {
        return view('dashboard_view');
    }
    public function logout() {
        session() -> remove('loggedInUser');
        session() -> destroy();
        return redirect() -> to(base_url().'/login');
    }
}
