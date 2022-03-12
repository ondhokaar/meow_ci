<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Filters;

/**
 * Description of LogoutFilter
 *
 * @author shabbir
 */
class LogoutFilter implements \CodeIgniter\Filters\FilterInterface {

    //put your code here

    public function after(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, $arguments = null): mixed {
        ;
    }

    public function before(\CodeIgniter\HTTP\RequestInterface $request, $arguments = null){
        if (session()->has('loggedInUser')) {
            return redirect()->to(base_url() . '/dashboard');
        }

    }

}
