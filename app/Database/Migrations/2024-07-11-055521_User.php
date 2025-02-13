<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel news
		$this->forge->addField([
			'id_user'          => [
				'type'           => 'INT',
				'unsigned'       => true,
				'auto_increment' => true
			],
			'username'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'password' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255
			],
			'akses'      => [
				'type'           => 'INT',
                'unsigned'       => true
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id_user', TRUE);

		// Membuat tabel news
		$this->forge->createTable('user', TRUE);
    }

    public function down()
    {
        // menghapus tabel news
		$this->forge->dropTable('user');
    }
}
