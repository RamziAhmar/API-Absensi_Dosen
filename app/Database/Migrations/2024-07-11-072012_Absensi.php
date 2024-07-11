<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Absensi extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel news
		$this->forge->addField([
			'id_absensi'          => [
				'type'           => 'INT',
				'unsigned'       => true,
				'auto_increment' => true
			],
			'id_dosen'       => [
				'type'           => 'INT'
			],
			'id_jadwal'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'status'      => [
				'type'           => 'ENUM',
				'constraint'     => ['Hadir', 'Tidak Hadir'],
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id_absensi', TRUE);

		// Membuat tabel news
		$this->forge->createTable('absensi', TRUE);
    }

    public function down()
    {
        // menghapus tabel news
		$this->forge->dropTable('absensi');
    }
}
