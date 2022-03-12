<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Controllers;

use App\Models\RegisterModel;

/**
 * Description of Signup
 *
 * @author shabbir
 */
class Signup extends \CodeIgniter\Controller {

    //put your code here
    public function __construct() {
        helper('form');
        $this->registerModel = new RegisterModel();
        //$this -> $validation =  \Config\Services::validation();
        $this->session = \Config\Services::session();
    }

    public function index() {

        echo "now all good";

        $data = [];
        if ($this->request->getMethod() == "post") {
            echo "posted";
            $reg = new RegisterModel();
            $users = $reg->users();
            //set rules
            $rules = [
                'name' => 'required|min_length[3]|max_length[30]',
                'email' => 'required|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[6]',
                'confirm-password' => 'required|matches[password]',
            ];

            if ($this->validate($rules)) {
                echo "valid";
                $userdata = [
                    'name' => $this->request->getVar('name'),
                    'email' => $this->request->getVar('email'),
                    'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
                ];
                $creation_user_success = $reg->createUser($userdata);
                
                if($creation_user_success) {
                    //goto login
                    
                }
                else {
                    //sth wrong
                }
            } else {
                $data['validation'] = $this->validator;
                return view('signup_view', $data);
            }
        }
//        if ($this->request->getMethod() == "post") {
//            //set rules
//            echo "setting rules";
//            $regModel = new RegisterModel();
//            $users = $regModel->users();
//            $rules = [
//                'name' => 'required|min_length[3]|max_length[20]',
//                'email' => 'required|valid_email|is_unique[users.email]',
//                'password' => 'required|min_length[6]|max_length[50]',
//                'confirm-password' => 'required|matches[password]',
//            ];
//
//            //check validity
//            if ($this->validate($rules)) {
//                //valid entry, all good :: create user
//                echo "valid data found";
//                $userdata = [
//                    'name' => $this->request->getVar('name'),
//                    'email' => $this->request->getVar('email'),
//                    'password' => $this->request->getVar('password')
//                ];
//                print_r($userdata);
//                if ($this->registerModel->createUser($userdata)) {
//                    //user created, goto  login
//                    $this->session->setTempdata('success', 'User created successfully, please login');
//                    echo "success";
//                    return redirect()->to(current_url());
//
//                    //return redirect()->to(base_url().'/login');
//                } else {
//                    //user not created
//                    $this->session->setTempdata('error', 'User not created', 5);
//                    //return redirect()->to(current_url());
//                }
//            } else {
//                //invalid entry,  
//                $data['validation'] = $this->validator;
//                // echo $this -> validator -> listErrors();
//                //return view('signup_view', $data);
//            }
//        }

        return view('signup_view', $data);
    }

}
