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
        helper('form');
        //$this -> mydb = new ProfileModel();
    }

    public function index() {
        if($this->request->getMethod() == 'post') {
            echo '10';
            $throttler = \CodeIgniter\Config\Services::throttler();
            if($throttler -> check(md5($this->request->getIPAddress()), 3, MINUTE) === false) {
                //say cool down
                echo 'thrott';
            }
            else {
                echo "set rules";
                $rules = [
                    'kitten-img' => 'uploaded[kitten-img]|max_size[kitten-img, 5120]|ext_in[kitten-img,png,gif,jpg,jpeg]',
                ];
                //|ext_in[kitten-img, png, gif, jpg, jpeg]
                if($this->validate($rules)) {

                    $file = $this->request->getFile('kitten-img');
                    
                    if($file->isValid() && !$file->hasMoved()) {
                        $newname = $file->getRandomName();
                        
                        if($file->move(WRITEPATH.'uploads/kittens/', $newname)) {
                            session()->setFlashdata('wsuccess', 'upload success :\'3');
                            return redirect()->to(current_url().'/#uploadKitten');
                            //write name in database
                        }
                        else {
                            session()->setFlashdata('wfailed', 'upload failed :(');
                            return redirect()->to(current_url().'/#uploadKitten');
                        }
                    }
                    else {
                            session()->setFlashdata('wfailed', 'invalid file :(');
                            return redirect()->to(current_url().'/#uploadKitten');
                    }
                    
                    
                    
                }
                else {
                    //invalid file
                    $error = $this->validator->getError('kitten-img');
                    session()->setFlashdata('wfailed', $error);
                    
                    return redirect()->to(current_url().'/#uploadKitten');
                }

            }

        }

        return view('profile_view');
    }
}
