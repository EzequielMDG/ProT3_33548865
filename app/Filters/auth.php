<?php
namespace App\Filters;
use Codeigniter\HTTP\RequestInterface;
use Codeigniter\HTTP\ResponseInterface;
use Codeigniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if(!session()->get('logged_in')) {
            return redirect()->to('login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {

    }
}