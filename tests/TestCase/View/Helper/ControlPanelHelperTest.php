<?php
declare(strict_types=1);

namespace MakvilleControlPanel\Test\TestCase\View\Helper;

use Cake\TestSuite\TestCase;
use Cake\View\View;
use MakvilleControlPanel\View\Helper\ControlPanelHelper;

/**
 * MakvilleControlPanel\View\Helper\ControlPanelHelper Test Case
 */
class ControlPanelHelperTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \MakvilleControlPanel\View\Helper\ControlPanelHelper
     */
    protected $ControlPanel;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $view = new View();
        $this->ControlPanel = new ControlPanelHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ControlPanel);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
