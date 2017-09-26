<?php
$this->load->view('template/header');
$this->load->view('template/menu');
?>
<!-- Main content -->
<div class="row">
    <div class="col-lg-12">
        <h1>Alteração de Clientes</h1>
        <p>Altera de cliente do sistema</p>
        <div class="col-lg-4">
            <div style="color: red;">
                <?= validation_errors(); ?>
            </div>
            <?= form_open("clientes/update/$cliente->id"); ?>
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input class="form-control" type="text" name="nome" value="<?= $this->input->post('nome') ? $this->input->post('nome') : $cliente->nome ?>">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" type="text" name="email" value="<?= $this->input->post('email') ? $this->input->post('email') : $cliente->email ?>">
            </div>
            <div class="form-group">
                <label for="cadastrado_em">Cadastrado em:</label>
                <input class="form-control" type="text" name="cadastrado_em" value="<?= $cliente->getCadastradoEm() ?>" disabled>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Cadastrar Cliente</button>
            </div>
            <?= form_close(); ?></form>
        </div>
    </div>
</div>