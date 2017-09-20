<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

    public function index($page=0) {
        
        $this->load->database();
        $produtos = $this->db->get('produtos', 10, $page)->result();
        
        $this->pagination->initialize([
            'total_rows' => $this->db->count_all('produtos'),
            'per_page' => 10,
            'base_url' => base_url() . '/produtos/index',
            'uri_segment' => 3,
        ]);
        $this->load->view('produtos/list', [
            'produtos' => $produtos
        ]);
    }
    
    public function get($id){
        echo 'Resgate um produto codigo: ' . $id;
    }
    
    public function create(){
        echo 'Salva novo cliente';
    }

}
