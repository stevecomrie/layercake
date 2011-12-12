<?php

App::uses('AdminModule', 'LayerCake.Model');

/**
 * AdminModule Test Case
 *
 */
class AdminModuleTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('plugin.layer_cake.admin_module');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AdminModule = ClassRegistry::init('LayerCake.AdminModule');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AdminModule);

		parent::tearDown();
	}

/**
 * Individual tests
 */
    public function testGetInstance() {
        $link = $this->AdminModule->field( 'link', array( 'AdminModule.name' => 'Blog' ) );
        $this->assertEquals( $link, '/admin/blog', 'Link' );
    }
    
    public function testActiveModules() {
        $active = $this->AdminModule->active_modules();
        $this->assertEquals( count( $active ), 2, "Number of Active Modules" );
    }

}
