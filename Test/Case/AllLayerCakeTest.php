<?php
/**
 * AllLayerCakeTest class
 *
 * This test group will run all test in the /Plugin/LayerCake/Test/Case
 */
class AllLayerCakeTest extends PHPUnit_Framework_TestSuite {

	public static function suite() {
		$suite = new CakeTestSuite('All LayerCake tests');
        $suite->addTestDirectory( ROOT . DS . APP_DIR . DS . 'Plugin' . DS . 'LayerCake' . DS . 'Test' . DS . 'Case' . DS . 'Controller');
        $suite->addTestDirectory( ROOT . DS . APP_DIR . DS . 'Plugin' . DS . 'LayerCake' . DS . 'Test' . DS . 'Case' . DS . 'Model');
        $suite->addTestDirectory( ROOT . DS . APP_DIR . DS . 'Plugin' . DS . 'LayerCake' . DS . 'Test' . DS . 'Case' . DS . 'View');
		return $suite;
	}
}