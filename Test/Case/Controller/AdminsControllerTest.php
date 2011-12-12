<?php
/* Admins Test cases generated on: 2011-12-12 12:21:43 : 1323710503*/
App::uses( 'AdminsController',  'LayerCake.Controller');

/**
 * AdminsController Test Case
 *
 */
class AdminsControllerTestCase extends ControllerTestCase {
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
 * Individual tests
 */
    public function testIndex() {
        $result = $this->testAction('/admin');
        debug($result);
    }
    
    public function testLogin() {
        $result = $this->testAction('/admin/admins/login');
        debug($result);
    }
    
    public function testForgot() {
        $result = $this->testAction('/admin/admins/forgot');
        debug($result);
    }
    
    public function testLogout() {
        $result = $this->testAction('/admin/admins/logout');
        debug($result);
    }
    
    public function testUpdate() {
        $result = $this->testAction('/admin/admins/update');
        debug($result);
    }
    
    public function testEdit() {
        $this->Admin = ClassRegistry::init('LayerCake.Admin');        
        $result = $this->testAction('/admin/admins/edit');
        debug($result);
    }    

}
