<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->library('session');
        $this->load->model('cliente');
        $clientes = $this->cliente->getAll();
        $data['clientes'] = $clientes;
        $this->load->vars($data);
        $this->load->view('clientes/list');
    }

    public function get($id) {
        echo 'Resgate um cliente codigo: ' . $id;
    }

    public function cadastro() {
        $this->load->model('cliente');
        $this->load->library('session');
        if ($this->cliente->validaForm()) {

            $insert = $this->cliente->insert([
                'nome' => $this->input->post('nome'),
                'email' => $this->input->post('email'),
                'cadastrado_em' => date('Y-m-d H:i:s')
            ]);

            if ($insert) {
                $this->session->set_flashdata('success', 'Cliente cadastrado com sucesso.');
                redirect('clientes');
            } else {
                show_error('Erro ao cadastrar cliente');
            }
        } else {
            $this->load->view('clientes/cadastro');
        }
    }

    public function update($id) {
        $this->load->model('cliente');
        $this->load->library('session');

        $cliente = $this->cliente->get($id);
        if (!$this->cliente->validaForm()) {
            $this->load->view('clientes/update', [
                'cliente' => $cliente
            ]);
        } else {
            $update = $this->cliente->update([
                'nome' => $this->input->post('nome'),
                'email' => $this->input->post('email')
            ], $id);
            
            if ($update) {
                $this->session->set_flashdata('success', 'Cliente alterado com sucesso.');
                redirect('clientes');
            } else {
                show_error('Erro ao alterar os dados');
            }
        }
    }

    public function delete($id) {
        $this->load->model('cliente');
        $this->load->library('session');

        if ($this->cliente->delete($id)) {
            $this->session->set_flashdata('success', 'Cliente excluído com sucesso.');
            redirect('clientes');
        }
        show_error('Erro ao excluir.');
    }

}
