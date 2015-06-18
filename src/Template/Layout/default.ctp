<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'MEPAVA Móveis | Sistema de controle de Estoque';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('ds3.css') ?>
    <?= $this->Html->css('jquery/jquery-ui.min.css') ?>
    <?= $this->Html->css('jquery/jquery-ui.structure.min.css') ?>
    <?= $this->Html->css('jquery/jquery-ui.theme.min.css') ?>
    <?= $this->Html->script('jquery/jquery-1.11.3.min') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
        <div class="header-title">
            <span><?= $this->fetch('title') ?></span>
        </div>
        <div class="header-help">
            <span><a href="/usuarios/logout">Logout</a></span>
        </div>
    </header>
    <div id="container">
        <nav id="menu-horizontal">
            <ul>
                <li><a href="/estoques">Estoque</a></li>
                <li><a href="/fabrica_produtos">Lista Técnica</a></li>
                <li><a href="/fornecedores">Fornecedores</a></li>
                <li><a href="/materias_primas">Matéria Prima</a></li>
                <li><a href="/matpri_fornecedores">Informações Materia Prima</a></li>
                <li><a href="/pedidos">Pedidos</a></li>
                <li><a href="/produtos">Produtos</a></li>
                <li><a href="/status">Status</a></li>
                <li><a href="/usuarios">Usuários</a></li>
            </ul>
        </nav>
        <div id="content">
            <?= $this->Flash->render() ?>

            <div class="row">
                <?= $this->fetch('content') ?>
            </div>
        </div>
        <footer>
        </footer>
    </div>

    <?= $this->Html->script('jquery/jquery-ui.min') ?>
    <?= $this->Html->script('functions') ?>
</body>
</html>
