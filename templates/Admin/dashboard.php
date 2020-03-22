<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo $this->ControlPanel->pageTitle('Dashboard', 'Sub heading for dashboard', 'pe-7s-car', [
    'name' => ['plugin', 'controller', 'action'],
    'name2' => ['plugin', 'controller', 'action']
 ]);
echo $this->ControlPanel->dashboard();