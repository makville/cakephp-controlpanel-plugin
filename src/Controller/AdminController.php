<?php

declare(strict_types = 1);

namespace MakvilleControlPanel\Controller;

/**
 * Admin Controller
 *
 *
 * @method \MakvilleControlPanel\Model\Entity\Admin[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdminController extends AppController {

    public function dashboard () {
        $this->ControlPanel->dashboard();
    }
}
