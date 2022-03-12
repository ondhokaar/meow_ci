<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Models;

use CodeIgniter\Model;

/**
 * Description of LoginModel
 *
 * @author shabbir
 */
class LoginModel extends Model {

    //put your code here
    public function verifyEmail($email) {
        $builder = $this->db->table('users');
        $builder->select('email, password');
        $builder->where('email', $email);
        
        $result = $builder -> get();
        if (count($result->getResultArray()) == 1) {
            return $result ->getRowArray();
        } else {
            return false;
        }
    }

}
