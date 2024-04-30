<?php
namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AdminFilter implements FilterInterface
{
    public function before(RequestInterface $request, $args = null)
    {
        $session = session();
        if ($session->has('role') && $session->get('role') == 'admin') {
            return $request;
        } else {
            return redirect()->to('login');
        }
    }



    public function after (RequestInterface $request, ResponseInterface $response, $args = null)
    {   
    }


}