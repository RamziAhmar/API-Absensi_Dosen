<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jadwal extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel news
		$this->forge->addField([
			'id_jadwal'          => [
				'type'           => 'INT',
				'unsigned'       => true,
				'auto_increment' => true
			],
			'id_dosen'       => [
				'type'           => 'INT'
			],
			'id_matkul'       => [
				'type'           => 'INT'
			],
			'tanggal'       => [
				'type'           => 'DATE'
			],
			'jam_mulai'      => [
				'type'           => 'TIME',
			],
			'jam_selesai' => [
				'type'           => 'TIME',
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id_jadwal', TRUE);

		// Membuat tabel news
		$this->forge->createTable('jadwal', TRUE);
    }

    public function down()
    {
        // menghapus tabel news
		$this->forge->dropTable('jadwal');
    }
}
