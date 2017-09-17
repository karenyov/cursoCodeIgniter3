<?php
class Migration_Create_Produtos extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'produto' => [
                'type' => 'varchar',
                'constraint' => '80'
            ],
            'descricao' => [
                'type' => 'varchar',
                'constraint' => '200'
            ],
            'preco' => [
                'type' => 'decimal',
                'constraint' => '10,2'
            ],
        ]);
        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('produtos', true);
    }

    public function down()
    {
        $this->dbforge->drop_table('clientes', true);
    }
}