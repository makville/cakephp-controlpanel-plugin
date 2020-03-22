<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$cakeDescription = 'Control Panel';
?>
<!doctype html>
<html lang="en">

    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <title>
            <?= $cakeDescription ?>:
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon') ?>

        <?= $this->Html->css('MakvilleControlPanel.main.css'); ?>
        <?= $this->Html->css('MakvilleControlPanel.supplementary.css'); ?>
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body>
        <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
            <?= $this->Element('MakvilleControlPanel.layout/makville-admin/header'); ?>
            <?= $this->Element('MakvilleControlPanel.layout/makville-admin/settings'); ?>
            <div class="app-main">
                <?= $this->Element('MakvilleControlPanel.layout/makville-admin/navigation'); ?>
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <?= $this->fetch('content'); ?>
                    </div>
                    <?= $this->Element('MakvilleControlPanel.layout/makville-admin/footer'); ?>
                </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
            </div>
        </div>
        <?= $this->Html->script('MakvilleControlPanel.main.js'); ?>
        <?= $this->fetch('scriptBottom'); ?>
        <?= $this->Flash->render(); ?>
    </body>
</html>
