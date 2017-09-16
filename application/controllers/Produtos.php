<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

    public function index() {
        $this->load->view('produtos/list');
    }
    
    public function get($id){
        echo 'Resgate um produto codigo: ' . $id;
    }
    
    public function create(){
        echo 'Salva novo cliente';
    }

}
