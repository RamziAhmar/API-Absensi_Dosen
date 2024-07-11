<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dosen extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel news
		$this->forge->addField([
			'id_dosen'          => [
				'type'           => 'INT',
				'unsigned'       => true,
				'auto_increment' => true
			],
			'id_user'       => [
				'type'           => 'INT'
			],
			'nama_lengkap'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'email'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 50,
			],
			'no_hp' => [
				'type'           => 'VARCHAR',
				'constraint'     => 13
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id_dosen', TRUE);

		// Membuat tabel news
		$this->forge->createTable('dosen', TRUE);
    }

    public function down()
    {
        // menghapus tabel news
		$this->forge->dropTable('dosen');
    }
}
