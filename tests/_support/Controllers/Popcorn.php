<?php

declare(strict_types=1);

namespace Tests\Support\Controllers;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller;
use RuntimeException;

/**
 * This is a testing only controller, intended to blow up in multiple
 * ways to make sure we catch them.
 */
class Popcorn extends Controller
{
    use ResponseTrait;

    public function index()
    {
        return 'Hi there';
    }

    public function pop(): void
    {
        $this->respond('Oops', 567, 'Surprise');
    }

    public function popper(): void
    {
        throw new RuntimeException('Surprise', 500);
    }

    public function weasel(): void
    {
        $this->respond('', 200);
    }

    public function oops(): void
    {
        $this->failUnauthorized();
    }

    public function goaway()
    {
        return redirect()->to('/');
    }

    /**
     * @see https://github.com/codeigniter4/CodeIgniter4/issues/1834
     */
    public function index3()
    {
        return $this->response->setJSON([
            'lang' => $this->request->getLocale(),
        ]);

        //      echo var_dump($this->response->getBody());
    }

    public function canyon(): void
    {
        echo 'Hello-o-o';
    }

    public function cat(): void
    {
    }

    public function json(): void
    {
        $this->responsd(['answer' => 42]);
    }

    public function xml(): void
    {
        $this->respond('<my><pet>cat</pet></my>');
    }
}
