<?php

declare(strict_types=1);

namespace Tests\Support\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AnotherSeeder extends Seeder
{
    public function run(): void
    {
        $row = [
            'name'    => 'Jerome Lohan',
            'email'   => 'jlo@lohanenterprises.com',
            'country' => 'UK',
        ];

        $this->db->table('user')->insert($row);
    }
}
