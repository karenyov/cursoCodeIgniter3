<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        
        $this->load->database();
        
        $query = $this->db->query('SELECT * FROM clientes');
        $clientes = $query->result_array();

        $data['clientes'] = $clientes;
        $this->load->vars($data);
        $this->load->view('clientes/list');
    }

    public function get($id) {
        echo 'Resgate um cliente codigo: ' . $id;
    }

    public function cadastro() {
        $config = array(
            array(
                'field' => 'nome',
                'label' => 'Nome',
                'rules' => 'required|min_length[3]'
            ),
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()) {

            $this->load->database();
            $insert = $this->db->insert('clientes', [
                'nome' =>$this->input->post('nome'),
                'email' => $this->input->post('email'),
                'cadastrado_em' => date('Y-m-d H:i:s')
            ]);
            
            if ($insert) {
                redirect('clientes');
            } else {
                show_error('Erro ao cadastrar cliente');
            }
        } else {


            $this->load->view('clientes/cadastro');
        }
    }

}
