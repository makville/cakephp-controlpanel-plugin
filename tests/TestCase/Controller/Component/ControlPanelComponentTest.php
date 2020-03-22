<?php
declare(strict_types=1);

namespace MakvilleControlPanel\Test\TestCase\Controller\Component;

use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;
use MakvilleControlPanel\Controller\Component\ControlPanelComponent;

/**
 * MakvilleControlPanel\Controller\Component\ControlPanelComponent Test Case
 */
class ControlPanelComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \MakvilleControlPanel\Controller\Component\ControlPanelComponent
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
        $registry = new ComponentRegistry();
        $this->ControlPanel = new ControlPanelComponent($registry);
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
