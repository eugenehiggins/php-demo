<?php
$link = mysqli_connect("localhost", "root", "crp5leez", "php_demo");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connection failed: %s\n", mysqli_connect_error());
    exit();
}


// if(!mysql_select_db("users"))
// {
// 	die('Databases "users" not found: '.mysql_error());
// }
?>