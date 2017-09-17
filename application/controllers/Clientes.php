<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {

        $clientes = [
            [
                'id' => 1,
                'nome' => 'Pedro de Lima',
                'email' => 'pedro@mail.com',
                'cadastrado_em' => '12/05/2015'
            ],
            [
                'id' => 2,
                'nome' => 'Rogerio de Souza',
                'email' => 'rogerio@mail.com',
                'cadastrado_em' => '02/11/2015'
            ],
            [
                'id' => 3,
                'nome' => 'Ana Paula',
                'email' => 'ana@mail.com',
                'cadastrado_em' => '15/04/2011'
            ]
        ];
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
            
            $this->input->post('nome');
            
        } else {


            $this->load->view('clientes/cadastro');
        }
    }

}
