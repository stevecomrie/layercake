<?php
/* Admin Fixture generated on: 2011-12-12 12:21:25 : 1323710485 */

/**
 * AdminFixture
 *
 */
class AdminFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'username' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 64, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'password' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 128, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'username' => array('column' => array('username', 'email'), 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */	
    public $records = array(
        array( 'username' => 'mariano', 'password' => '5f4dcc3b5aa765d61d8327deb882cf99', 'name' => 'Mariano Smith', 'email' => 'mariano@example.com', 'created' => '2007-03-17 01:16:23', 'modified' => '2007-03-17 01:18:31'),
        array( 'username' => 'nate',    'password' => '5f4dcc3b5aa765d61d8327deb882cf99', 'name' => 'Nate Johns',    'email' => 'nate@example.com',    'created' => '2007-03-17 01:18:23', 'modified' => '2007-03-17 01:20:31'),
        array( 'username' => 'larry',   'password' => '5f4dcc3b5aa765d61d8327deb882cf99', 'name' => 'Larry Fitz',    'email' => 'larry@example.com',   'created' => '2007-03-17 01:20:23', 'modified' => '2007-03-17 01:22:31'),
        array( 'username' => 'garrett', 'password' => '5f4dcc3b5aa765d61d8327deb882cf99', 'name' => 'Garrett Evans', 'email' => 'garrett@example.com', 'created' => '2007-03-17 01:22:23', 'modified' => '2007-03-17 01:24:31'),
    );
}
