<?php

declare(strict_types=1);

namespace App\Database\Migrations;

class AddUsers extends \CodeIgniter\Database\Migration
{
    public function up(): void
    {
        $this->forge->addField([
            'id'         => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'firstname'  => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'lastname'   => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'email'      => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'password'   => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                // 'default'        => 'current_timestamp()',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                // 'default'        => 'current_timestamp()',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down(): void
    {
        $this->forge->dropTable('users');
    }
}
