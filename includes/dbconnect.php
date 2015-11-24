<?php
$link = mysqli_connect("localhost", "root", "crp5leez", "php_demo");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connection failed: %s\n", mysqli_connect_error());
    exit();
}

