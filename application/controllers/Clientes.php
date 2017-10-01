<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends MY_Controller
{
    public function __construct() {
        parent::__construct();
        $this->require_min_level(9);
    }
    
    public function index()
    {
        $this->load->library('session');
        $this->load->model('cliente');

        $clientes = $this->cliente->getAll();

        $this->load->view('clientes/list', [
            'clientes' => $clientes
        ]);
    }
    
    public function search($busca)
    {
        $this->load->model('cliente');
        $clientes = $this->cliente->search($busca);

        $this->load->view('clientes/tableajax', [
            'clientes' => $clientes
        ]);
    }

    public function get($id)
    {
        echo 'Resgata um cliente codigo: ' . $id;
    }

    public function cadastro()
    {
        $this->load->helper(['form', 'url']);
        $this->load->library('session');
        $this->load->model('cliente');

        if ($this->cliente->validaForm() === false) {
            $this->load->view('clientes/cadastro');
        } else {
            // cadastrar o cliente
            $insert = $this->cliente->insert([
                'nome' => $this->input->post('nome'),
                'email' => $this->input->post('email'),
                'cadastrado_em' => date('Y-m-d H:i:s')
            ]);

            if ($insert) {
                $this->session->set_flashdata('success', 'Cliente cadastrado com sucesso');
                redirect('clientes');
            } else {
                show_error('Erro ao cadastra cliente');
            }
        }
    }

    public function update($id)
    {
        $this->load->helper(['form', 'url']);
        $this->load->library('session');
        $this->load->model('cliente');

        $cliente = $this->cliente->get($id);

        if ($this->cliente->validaForm() === false) {
            $this->load->view('clientes/update', [
                'cliente' => $cliente
            ]);
        } else {
            // Anti over post
            $update = $this->cliente->update([
                'nome' => $this->input->post('nome'),
                'email' => $this->input->post('email') 
            ], $id);

            if ($update) {
                $this->session->set_flashdata('success', 'Cliente alterado com sucesso');
                redirect('clientes');
            } else {
                show_error('Erro ao alterar os dados');
            }
        }

    }

    public function delete($id)
    {
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('cliente');

        if ($this->cliente->delete($id)) {
            $this->session->set_flashdata('success', 'Cliente excluido com sucesso');
            redirect('clientes');
        }
        show_error('Erro ao excluir');
    }
}