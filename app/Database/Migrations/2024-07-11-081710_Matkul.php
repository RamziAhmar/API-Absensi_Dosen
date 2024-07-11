<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Matkul extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel news
		$this->forge->addField([
			'id_matkul'          => [
				'type'           => 'INT',
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nama_matkul'       => [
				'type'           => 'VARCHAR',
                'constraint'    => 50
			],
			'sks'       => [
				'type'           => 'INT'
			],
			'keterangan'      => [
				'type'           => 'TEXT',
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id_matkul', TRUE);

		// Membuat tabel news
		$this->forge->createTable('matkul', TRUE);
    }

    public function down()
    {
        // menghapus tabel news
		$this->forge->dropTable('matkul');
    }
}
