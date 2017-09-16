<?php
$this->load->view('template/header');
$this->load->view('template/menu');
?>
<!-- Main content -->
<div class="row">
    <div class="col-lg-12">
        <h1>Cadastro de Clientes</h1>
        <p>Cadastro de clientes do sistema</p>
        <div class="col-lg-4">
            <form action="">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input class="form-control" type="text" name="nome">
                </div>
                <div class="form-group">
                    <label for="nome">Email:</label>
                    <input class="form-control" type="text" name="nome">
                </div>
                <div class="form-group">
                    <label for="nome">Cadastrado em:</label>
                    <input class="form-control" type="text" name="nome">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Cadastrar Cliente</button>
                </div>
            </form>
        </div>
    </div>
</div>