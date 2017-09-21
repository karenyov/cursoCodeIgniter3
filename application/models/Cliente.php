<?php

/**
 * Description of Cliente
 *
 * @author Karen
 */
class Cliente extends CI_Model {

    public $table = 'clientes';

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get($id) {
        $cliente = $this->db->get_where($this->table, ['id' => $id]);
        return $cliente->custom_row_object(0, 'Cliente');
    }

    public function getAll() {
        $clientes = $this->db->get($this->table);
        return $clientes->result_array();
    }

    public function delete($id) {
        return $this->db->delete($this->table, ['id' => $id]);
    }

    public function insert(array $data) {
        return $this->db->insert($this->table, $data);
    }

    public function update(array $data, $id) {
        return $this->db->update($this->table, $data, ['id' => $id]);
    }

}
