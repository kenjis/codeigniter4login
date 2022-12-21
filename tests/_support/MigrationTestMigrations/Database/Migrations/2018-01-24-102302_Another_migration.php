<?php

declare(strict_types=1);

namespace Tests\Support\MigrationTestMigrations\Database\Migrations;

use CodeIgniter\Database\Migration;

class Migration_another_migration extends Migration
{
    public function up(): void
    {
        $fields = [
            'value' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
        ];
        $this->forge->addColumn('foo', $fields);

        $this->db->table('foo')->insert([
            'key'   => 'foobar',
            'value' => 'raboof',
        ]);
    }

    public function down(): void
    {
        if ($this->db->tableExists('foo')) {
            $this->forge->dropColumn('foo', 'value');
        }
    }
}
