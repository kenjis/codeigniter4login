<?php

declare(strict_types=1);

namespace Tests\Support\MigrationTestMigrations\Database\Migrations;

use CodeIgniter\Database\Migration;

class Migration_some_migration extends Migration
{
    public function up(): void
    {
        $this->forge->addField([
            'key' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);
        $this->forge->createTable('foo', true);

        $this->db->table('foo')->insert([
            'key' => 'foobar',
        ]);
    }

    public function down(): void
    {
        $this->forge->dropTable('foo', true);
    }
}
