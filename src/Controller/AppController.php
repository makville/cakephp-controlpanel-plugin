<?php

declare(strict_types = 1);

namespace MakvilleControlPanel\Controller;

use App\Controller\AppController as BaseController;

class AppController extends BaseController {
    public function initialize(): void {
        parent::initialize();
        $this->loadComponent('MakvilleControlPanel.ControlPanel');
        $this->viewBuilder()->setLayout($this->ControlPanel->getLayout());
    }
}
