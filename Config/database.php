<?php
class DATABASE_CONFIG {

	public $test = array(
		'datasource' => 'Database/',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'user',
		'password' => 'password',
		'database' => 'test_database_name',
	);
	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => 'buceta',
		'database' => 'cursocake2',
		'encoding' => 'utf8'
	);
}
