<?php
/* Dashboards Test cases generated on: 2011-12-12 12:21:56 : 1323710516*/
App::uses('DashboardsController', 'LayerCake.Controller');

/**
 * Dashboards Test Case
 *
 */
class DashboardsTestCase extends ControllerTestCase {
/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		//$this->Dashboards = new TestDashboards();
		//$this->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Dashboards);

		parent::tearDown();
	}
    

/**
 * Individual tests
 */
    public function testIndex() {
        $result = $this->testAction('/admin/Dashboards');
        debug($result);
    }  

}

