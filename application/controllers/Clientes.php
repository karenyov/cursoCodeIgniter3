<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

    public function index() {
        echo 'Todos os clientes';
    }
    
    public function get($id){
        echo 'Resgate um cliente codigo: ' . $id;
    }
    
    public function create(){
        echo 'Salva novo cliente';
    }

}
