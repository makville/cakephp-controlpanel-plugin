<?php

declare(strict_types = 1);

namespace MakvilleControlPanel\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

/**
 * ControlPanel helper
 */
class ControlPanelHelper extends Helper {

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function dashboard() {
        if ($this->_View->elementExists('control-panel/dashboard')) {
            return $this->_View->element('control-panel/dashboard');
        } else {
            return $this->_View->element('MakvilleControlPanel.pages/dashboard');
        }
    }
    
    public function getPluginDashboard ($plugin) {
        if ($this->_View->elementExists("pages/$plugin/dashboard")) {
            return $this->_View->element("pages/$plugin/dashboard");
        } else if ($this->_View->elementExists("$plugin.pages/dashboard")) {
            return $this->_View->element("$plugin.pages/dashboard");
        }
    }

    public function pageTitle($heading = null, $subHeading = null, $icon = null, $actions = null) {
        if ($this->_View->elementExists('control-panel/page-title')) {
            return $this->_View->element('control-panel/page-title', ['heading' => $heading, 'subHeading' => $subHeading, 'icon' => $icon, 'actions' => $actions]);
        } else {
            return $this->_View->element('MakvilleControlPanel.pages/page-title', ['heading' => $heading, 'subHeading' => $subHeading, 'icon' => $icon, 'actions' => $actions]);
        }
    }

    public function getPluginNavigation($plugin) {
        if ($this->_View->elementExists("layout/$plugin/navigation")) {
            return $this->_View->element("layout/$plugin/navigation");
        } else if ($this->_View->elementExists("$plugin.layout/navigation")) {
            return $this->_View->element("$plugin.layout/navigation");
        }
    }

}
