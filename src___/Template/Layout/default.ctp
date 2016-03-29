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
$cakeDescription = 'test project using cake';
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


        <?= $this->Html->css('base.css') ?>
        <?= $this->Html->css('cake.css') ?>
        <?= $this->Html->css('jquery.ui.all.css') ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    </head>
    <body>

        <nav class="top-bar expanded" data-topbar role="navigation">
            <ul class="title-area large-3 medium-4 columns">
                <li class="name">
                    <h1><a href=""><?= $this->fetch('title') ?></a></h1>
                </li>
            </ul>
            <section class="top-bar-section">
                <ul class="right">
                    <li><a target="" href="#">API</a></li>
                    <li><a target="" href="#" id="logout">Logout</a></li>
                </ul>
            </section>
        </nav>
        <?= $this->Flash->render() ?>
        <section class="container clearfix">
            <nav class="large-3 medium-4 columns" id="actions-sidebar">
                <ul class="side-nav">
                    <li class="heading"><?= __('Dashborad') ?></li>
                    <li><?= $this->Html->link('User', '/User', ['class' => '']) ?></li>
                    <li><?= $this->Html->link('Subject', '/Subject', ['class' => '']) ?></li>
                    <li><?= $this->Html->link('Batch', '/Batch', ['class' => '']) ?></li>
                    <li><?= $this->Html->link('Student', '/Student', ['class' => '']) ?></li>
                    <li><?= $this->Html->link('FileStorage', '/FileStorage', ['class' => '']) ?></li>
                </ul>
            </nav>
            <?= $this->fetch('content') ?>
        </section>
        <footer>
        </footer>
    </body>
</html>
