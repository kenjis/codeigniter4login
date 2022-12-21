<?php

declare(strict_types=1);

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class UsersCheck implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        // If segment 1 == users
        // we have to redirect the request to the second segment
        $uri = service('uri');
        if ($uri->getSegment(1) === 'users') {
            $segment = $uri->getSegment(2) === '' ? '/' : '/' . $uri->getSegment(2);

            return redirect()->to($segment);
        }
    }

    // --------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null): void
    {
        // Do something here
    }
}
