<?php
if(!$mysqli = new mysqli('127.0.0.1', 'root', 'crp5leez', 'php_demo'))
{
	die('Could not connect to database: '.mysql_error());
	exit();
}

// if(!mysql_select_db("users"))
// {
// 	die('Databases "users" not found: '.mysql_error());
// }
?>