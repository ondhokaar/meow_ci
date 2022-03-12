<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Filters;

/**
 * Description of MaxRequest
 *
 * @author shabbir
 */
class MaxRequest implements \CodeIgniter\Filters\FilterInterface {
    //put your code here
    public function before(\CodeIgniter\HTTP\RequestInterface $request, $arguments = null) {
        $throttler = \CodeIgniter\Config\Services::throttler();
        if($throttler -> check(md5($request->getIPAddress()), 3, 60) === false) {
            session()->setFlashdata('throttle', 'ohohohooo calm down!! wait a moment please');
//            return redirect()->to(current)
//            return \CodeIgniter\Config\Services::response()->setStatusCode(429);
        }
    }
    public function after(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, $arguments = null): mixed {
        ;
    }
}
