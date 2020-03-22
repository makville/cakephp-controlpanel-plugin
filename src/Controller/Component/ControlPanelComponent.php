<?php

declare(strict_types = 1);

namespace MakvilleControlPanel\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;

/**
 * ControlPanel component
 */
class ControlPanelComponent extends Component {

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function getLayout () {
        if (file_exists(ROOT . DS . "templates" . DS . "layout" . DS . "admin.php")) {
            return 'admin';
        } else {
            return 'MakvilleControlPanel.makville-admin';
        }
    }

}
