<?php
$allBots = array(
	'test123' => array('class'=>'DbClass')
);

//MYSQL QUERY DETAILS - INSERT, UPDATE, DELETE
define('DB_READ_NAME', 'example_db'); 		//DATABASE NAME
define('DB_READ_USER', 'root'); 	//DATABASE USERNAME FOR ONLY READING PURPOSE
define('DB_READ_PASSWORD', '');		//DATABASE PASSWORD FOR ONLY READING PURPOSE
define('DB_READ_HOST', '127.0.0.1');		//DATABASE HOST

require 'library/InterfaceRest.php';
require_once 'library/sqlquery.class.php';
require_once 'DbClass.php';

$db = SQLQuery::getInstance();
?>