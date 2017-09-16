<?php
$this->load->view('template/header');
$this->load->view('template/menu');
?>
<!-- Main content -->
<div class="row">
    <div class="col-lg-12">
        <h1>Lista de Clientes</h1>
        <p>Listagem de clientes</p>
        <a href="/clientes/cadastro" class="btn btn-success pull-right">Cadastrar Cliente</a>
        <div class="form-inline">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Sua busca aqui">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Buscar</button>
                </span>
            </div>
        </div>
        <br>
        <table class="table table-bordered table-striped">
            <thead>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Cadastro em</th>
            <th>Adm</th>
            </thead>
            <?php foreach ($clientes as $cliente): ?>
                <tr>
                    <td><?= $cliente['id'] ?></td>
                    <td><?= $cliente['nome'] ?></td>
                    <td><?= $cliente['email'] ?></td>
                    <td><?= $cliente['cadastrado_em'] ?></td>
                    <td>
                        <a href="" class="btn btn-primary">Alterar</a>
                        <a href="" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
<?php $this->load->view('template/footer'); ?>