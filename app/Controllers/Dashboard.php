<?php

declare(strict_types=1);

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index(): void
    {
        $data = [];

        echo view('templates/header', $data);
        echo view('dashboard');
        echo view('templates/footer');
    }

    // --------------------------------------------------------------------
}
