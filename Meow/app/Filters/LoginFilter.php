<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Filters;

/**
 * Description of LoginFilter
 *
 * @author shabbir
 */
class LoginFilter implements \CodeIgniter\Filters\FilterInterface {

    //put your code here

    public function after(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, $arguments = null): mixed {
        ;
    }

    public function before(\CodeIgniter\HTTP\RequestInterface $request, $arguments = null): mixed {
        //before loading every page, check if user is logged in or not
        if (!session()->has('loggedInUser')) {
            session()->setFlashData('bounced', 'Please log in first');
            echo "?";
            return redirect()->to(base_url() . '/login');
        }
    }

}
