<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

namespace App\Controllers;

use App\Models\LoginModel;

class Login extends \CodeIgniter\Controller {
    
    public $loginModel;
    public function __construct() {
        helper('form');
        $this->loginModel = new LoginModel();
        $this->session = \Config\Services::session();
    }

    public function index() {

        $data = [];
        if ($this->request->getMethod() == "post") {

            //set rules
            $rules = [
                'email' => 'required|valid_email',
                'password' => 'required',
            ];
            
            if($this->validate($rules)) {
                //ok valid input, now auth

                $email = $this->request->getPost('email');
                $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
                
                $userdata = $this->loginModel->verifyEmail($email);
                if($userdata) {
                    //if exists

                    return view('login_view');
                }
                else {
                    //user does not exist

                    $this->session->setTempdata('user_not_found', 'email does not exist :(<br>Please sign up first', 5);
                    return redirect()->to(base_url().'/signup');
                }
                
            }
            else {
                //invalid input

                $data['validation'] = $this->validator;
                return view('login_view', $data);
            }
        }//endif

        return view('login_view', $data);
        //return view('login_view');
//        $data = [];
//        if ($this->request->getMethod() == "post") {
//            //set rules
//            echo 'inside';
//            $rules = [
//                'email' => 'required|valid_email',
//                'password' => 'required',
//            ];
//
//            if ($this->validate($rules)) {
//                echo "validated";
//               $email = $this->request->getVar('email');
//               $password = $this->request->getVar('password');
//               $loginModel = new LoginModel();
//               $userdata = $loginModel->verifyEmail($email);
////
//                if ($userdata) {
////                    //check pass
//                    if (password_verify($password, $userdata['password'])) {
////                        //login
//                       $this->session->set('loggedUser', $userdata['email']);
//                       echo '42';
//                       //$this -> redirect() -> to(base_url().'/dashboard');
//                    }
//                    else {
//                        $this->session->setTempdata("error", 'wrong password', 3);
//                        echo '47';
//                        //$this->redirect()->to(current_url());
//                    }
//                } else {
//                   //wrong mail
//                   $this->session->setTempdata('error', 'email doesn\'t exist', 5);
//                   echo "53";
//                   //return redirect()->to(current_url());
//                }
//            }
//
//            echo "?";
//            return view('login_view');
//        }
    }

}
