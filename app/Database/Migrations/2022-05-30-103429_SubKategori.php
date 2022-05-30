<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SubKategori extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'subkatid'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'subkatnama'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('subkatid', true);
        $this->forge->createTable('subkategori');
    }

    public function down()
    {
        $this->forge->dropTable('subkategori');
    }
}
