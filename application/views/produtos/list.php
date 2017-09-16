<?php
$this->load->view('template/header');
$this->load->view('template/menu');
?>
<!-- Main component for a primary marketing message or call to action -->
<div class="row">
    <div class="col-lg-12">
        <h1>Lista de Produtos</h1>
        <p>Listagem de produtos</p>
        <br>
        <table class="table table-striped">
            <thead>
                <th>Id</th>
                <th>Produto</th>
                <th>Descrição</th>
                <th>Preço</th>
            </thead>
            <tr>
                <td>1</td>
                <td>Cabo HDMI</td>
                <td>Cabo para transmissão de imagens</td>
                <td>R$ 20,00</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Kit Gamer</td>
                <td>Teclado 3 Led, Mouse 2400 Dpi Led, Fone Headset</td>
                <td>R$ 84,99</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Kit Teclado E Mouse</td>
                <td>Kit Teclado E Mouse Sem Fio Wireless 2.4ghz 3200dpi Óptico</td>
                <td>R$ 43,49</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Caixa De Som</td>
                <td>Caixa De Som Sub Woofer 2.1 Satélite 20w Rms P2 Notebook Pc</td>
                <td>R$ 32,49</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Roteador</td>
                <td>Roteador D-Link DIR-610</td>
                <td>R$ 59,00</td>
            </tr>
        </table>
        <div class="pagination">
            <!-- paginação aqui -->
        </div>
    </div>
</div>
<style>
    .pagination a, strong {
        padding: 5px;
    }
</style>
<?php $this->load->view('template/footer'); ?>