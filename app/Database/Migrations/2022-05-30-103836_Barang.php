<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'brgid'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'brgnama'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'brgkat'       => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'brgsubkat'       => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'brgharga'       => [
                'type'       => 'DOUBLE',
                'constraint' => '10,2',
            ],
            'brgstok'       => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'brggambar'       => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'brgdeskripsi'       => [
                'type'       => 'TEXT',
            ],
        ]);
        $this->forge->addKey('brgid', true);
        $this->forge->createTable('barang');
    }

    public function down()
    {
        $this->forge->dropTable('barang');
    }
}
