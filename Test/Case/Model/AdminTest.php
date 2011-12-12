<?php
/* Admin Test cases generated on: 2011-12-12 12:21:25 : 1323710485*/
App::uses('Admin', 'LayerCake.Model');

/**
 * Admin Test Case
 *
 */
class AdminTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('plugin.layer_cake.admin');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Admin = ClassRegistry::init('LayerCake.Admin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Admin);

		parent::tearDown();
	}
    
/**
 * individual tests
 */
    public function testGetInstance() {
        $created = $this->Admin->field( 'created', array( 'Admin.username' => 'mariano' ) );
        $this->assertEquals( $created, '2007-03-17 01:16:23', 'Created Date' );
    }

}
