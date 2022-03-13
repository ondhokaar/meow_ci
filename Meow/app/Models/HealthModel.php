<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Models;

/**
 * Description of HealthModel
 *
 * @author shabbir
 */
class HealthModel extends \CodeIgniter\Model {

    //put your code here
    public function listAllVets() {
        $builder = $this->db->table('vets');
        $query = $builder->distinct()->get();
        
        return $query;
    }

}
