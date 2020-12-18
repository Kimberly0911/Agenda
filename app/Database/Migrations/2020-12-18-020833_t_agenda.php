<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TAgenda extends Migration
{
	public function up()
	{
	$this->db->disableForeignKeyChecks();
	$this->forge->addField([
		'id_contacto'          => [
			'type'           => 'INT',
			'constraint'     => 5,
			'unsigned'       => true,
			'auto_increment' => true,
	],
	'nombre'       => [
			'type'           => 'VARCHAR',
			'constraint'     => '255',
	],
	'paterno'       => [
			'type'           => 'VARCHAR',
			'constraint'     => '255',
	],
	'materno'       => [
			'type'           => 'VARCHAR',
			'constraint'     => '255',
	],
	'telefono'       => [
			'type'           => 'VARCHAR',
			'constraint'     => '255',
	],

	'email'       => [
			'type'           => 'VARCHAR',
			'constraint'     => '255',
	],
	'id_categoria'       => [
			'type'           => 'INT',
			'constraint'     => 5,
			'unsigned'       => true,
	],

	'fechaInsert'       => [
			'type'           => 'VARCHAR',
			'constraint'     => '255',
	],
]);
$this->forge->addKey('id_agenda', true);
$this->forge->addForeignKey('id_categoria', 't_categoria','id_categoria','CASCADE','CASCADE');
$this->forge->createTable('t_agenda');
$this->db->enableForeignKeyChecks();

}

public function down()
{
$this->forge->dropTable('t_agenda');
}
}