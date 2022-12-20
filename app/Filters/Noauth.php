<?php

declare(strict_types=1);

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Noauth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/dashboard');
        }
    }

    // --------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null): void
    {
        // Do something here
    }
}
