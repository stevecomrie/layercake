<?php
/* AdminModule Fixture generated on: 2011-12-12 12:21:33 : 1323710493 */

/**
 * AdminModuleFixture
 *
 */
class AdminModuleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'parent_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'collate' => NULL, 'comment' => ''),
		'ordering' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 32, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
		'link' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 32, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
		'icon' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 32, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
		'description' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
		'search_model' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 32, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
		'active' => array('type' => 'boolean', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'visible' => array('type' => 'boolean', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'id' => array('column' => 'id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	
    public $records = array(
        array( 'id' => 1, 'parent_id' => 0, 'name' => 'Content', 'link' => '/admin/pages', 'icon' => 'ico-create.png', 'description' => '', 'search_model' => 'Page', 'active' => 1, 'visible' => 1, 'created' => '2007-03-17 01:16:23', 'modified' => '2007-03-17 01:18:31'),
        array( 'id' => 2, 'parent_id' => 0, 'name' => 'Blog',    'link' => '/admin/blog',  'icon' => 'ico-blog.png',   'description' => '', 'search_model' => 'BlogArticle', 'active' => 1, 'visible' => 1, 'created' => '2007-03-17 01:16:23', 'modified' => '2007-03-17 01:18:31'),
        array( 'id' => 3, 'parent_id' => 1, 'name' => 'Users',   'link' => '/admin/users', 'icon' => 'ico-user.png',   'description' => '', 'search_model' => 'User', 'active' => 0, 'visible' => 0, 'created' => '2007-03-17 01:16:23', 'modified' => '2007-03-17 01:18:31'),
    );
}
