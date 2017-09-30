<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller
{
    public function index($page=0)
    {
        $this->load->library('pagination');
        $this->load->database();

        $produtos = $this->db->get('produtos', 10, $page)->result();

        $this->pagination->initialize([
            'total_rows' => $this->db->count_all('produtos'),
            'per_page' => 10,
            'base_url' => '/produtos/index',
            'first_link' => 'primeiro',
            'last_link' => 'ultimo'
        ]);

        $this->load->view('produtos/list', [
            'produtos' => $produtos
        ]);
    }

    public function get($id)
    {
        echo 'Resgata um produto cod: ' . $id;
    }

    public function create()
    {
        echo 'Salva o produtos';
    }
}