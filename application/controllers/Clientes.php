<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

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
        echo 'Salva novo cliente';
    }

}
