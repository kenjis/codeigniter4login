<?php

declare(strict_types=1);

namespace Tests\Support\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CITestSeeder extends Seeder
{
    public function run(): void
    {
        // Job Data
        $data = [
            'user' => [
                [
                    'name'    => 'Derek Jones',
                    'email'   => 'derek@world.com',
                    'country' => 'US',
                ],
                [
                    'name'    => 'Ahmadinejad',
                    'email'   => 'ahmadinejad@world.com',
                    'country' => 'Iran',
                ],
                [
                    'name'    => 'Richard A Causey',
                    'email'   => 'richard@world.com',
                    'country' => 'US',
                ],
                [
                    'name'    => 'Chris Martin',
                    'email'   => 'chris@world.com',
                    'country' => 'UK',
                ],
            ],
            'job'  => [
                [
                    'name'        => 'Developer',
                    'description' => 'Awesome job, but sometimes makes you bored',
                ],
                [
                    'name'        => 'Politician',
                    'description' => 'This is not really a job',
                ],
                [
                    'name'        => 'Accountant',
                    'description' => 'Boring job, but you will get free snack at lunch',
                ],
                [
                    'name'        => 'Musician',
                    'description' => 'Only Coldplay can actually called Musician',
                ],
            ],
            'misc' => [
                [
                    'key'   => '\\xxxfoo456',
                    'value' => 'Entry with \\xxx',
                ],
                [
                    'key'   => '\\%foo456',
                    'value' => 'Entry with \\%',
                ],
                [
                    'key'   => 'spaces and tabs',
                    'value' => ' One  two   three	tab',
                ],
            ],
        ];

        foreach ($data as $table => $dummy_data) {
            $this->db->table($table)->truncate();

            foreach ($dummy_data as $single_dummy_data) {
                $this->db->table($table)->insert($single_dummy_data);
            }
        }
    }

    // --------------------------------------------------------------------
}
