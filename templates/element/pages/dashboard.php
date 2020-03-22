<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

foreach (Cake\Core\Plugin::loaded() as $plugin) {
    if ($plugin == 'MakvilleControlPanel') {
        continue;
    }
    if ($this->elementExists("$plugin.pages/dashboard")) {
        echo $this->element("$plugin.pages/dashboard");
    }
}