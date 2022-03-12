<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Models;

use CodeIgniter\Model;

/**
 * Description of RegisterModel
 *
 * @author shabbir
 */
class RegisterModel extends Model
{
    //put your code here
    public function createUser($data)
    {
        $builder = $this->db->table('users');
        $result =  $builder->insert($data);

        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }
    public function users(){
        return $this -> db -> table('users');
     }
}
