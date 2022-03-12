<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

namespace App\Controllers;

use App\Models\LoginModel;

class Login extends \CodeIgniter\Controller {

    public function __construct() {
        helper('form');

        $this->session = \Config\Services::session();
    }

    public function index() {
        return view('login_view');
        $data = [];
        if ($this->request->getMethod() == "post") {
            //set rules
            echo 'inside';
            $rules = [
                'email' => 'required|valid_email',
                'password' => 'required',
            ];

            if ($this->validate($rules)) {
                echo "validated";
               $email = $this->request->getVar('email');
               $password = $this->request->getVar('password');
               $loginModel = new LoginModel();
               $userdata = $loginModel->verifyEmail($email);
//
                if ($userdata) {
//                    //check pass
                    if (password_verify($password, $userdata['password'])) {
//                        //login
                       $this->session->set('loggedUser', $userdata['email']);
                       echo '42';
                       //$this -> redirect() -> to(base_url().'/dashboard');
                    }
                    else {
                        $this->session->setTempdata("error", 'wrong password', 3);
                        echo '47';
                        //$this->redirect()->to(current_url());
                    }
                } else {
                   //wrong mail
                   $this->session->setTempdata('error', 'email doesn\'t exist', 5);
                   echo "53";
                   //return redirect()->to(current_url());
                }
            }

            echo "?";
            return view('login_view');
        }
    }
    

}   