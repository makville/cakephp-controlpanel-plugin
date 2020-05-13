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

    public function getLayout() {
        if (file_exists(ROOT . DS . "templates" . DS . "layout" . DS . "admin.php")) {
            return 'admin';
        } else {
            return 'MakvilleControlPanel.makville-admin';
        }
    }

    public function dashboard() {
        //get all my plugins other than the control panel
        foreach (\Cake\Core\Plugin::loaded() as $plugin) {
            if ($plugin != 'MakvilleControlPanel' && strpos($plugin, 'Makville') !== false) {
                $component = substr($plugin, 8);
                if (in_array($component, $this->getController()->components()->loaded())) {
                    $dashboardPath = \Cake\Core\Plugin::templatePath($plugin) . 'element/pages/dashboard.php';
                    if (file_exists($dashboardPath)) {
                        $this->getController()->$component->dashboard();
                    }
                }
            }
        }
    }

}
