<?php

function active($item, $uri) {
    return $uri->segment(1) == $item ? 'class="active"' : null;
}
?>
<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li <?= active('', $this->uri) ?>><a href="<?= site_url("welcome") ?>">Home</a></li>
                <?php if($auth_role == 'admin'):?>
                    <li <?= active('clientes', $this->uri) ?>><a href="<?= site_url("clientes") ?>">Clientes</a></li>
                <?php endif?>
                <li <?= active('produtos', $this->uri) ?>><a href="<?= site_url("produtos") ?>">Produtos</a></li>
            </ul
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?= site_url('/login/deslogar') ?>">Logout</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>


<div class="container">