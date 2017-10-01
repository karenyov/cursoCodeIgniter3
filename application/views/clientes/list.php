<?php
$this->load->view('template/header');
$this->load->view('template/menu');
?>
<!-- Main content -->
<div class="row">
    <div class="col-lg-12">
        <h1>Lista de Clientes</h1>
        <p>Listagem de clientes</p>
        <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success">
                <?= $this->session->flashdata('success') ?>
            </div>
        <?php endif; ?>

        <a href="<?= site_url('clientes/cadastro') ?>" class="btn btn-success pull-right">Cadastrar Cliente</a>
        <div class="form-inline">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Sua busca aqui" id="texto">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button" id="buscar">Buscar</button>
                </span>
            </div>
        </div>
        <br>
        <div id="table_ajax">
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
                            <a href="<?= site_url(['clientes', 'update', $cliente['id']]) ?>" class="btn btn-primary">Alterar</a>
                            <a href="<?= site_url(['clientes', 'delete', $cliente['id']]) ?>" class="btn btn-danger">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
<?php $this->load->view('template/footer'); ?>
<script>
$('#buscar').click(function() {
    if($('#texto').val() == '') {
        return;
    }
    
    $.ajax({
        url: "<?= site_url('/clientes/search/')?>" + $('#texto').val(),
        type: 'GET',
        success: function(data){
            $('#table_ajax').empty();
            $('#table_ajax').html(data);
        }
    });
});
</script>