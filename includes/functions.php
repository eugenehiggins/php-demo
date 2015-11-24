<?php

function flash_message($type, $message) {
    // start session if not started
    $_SESSION['message'] = array('type' => $type, 'message' => $message);
    if (isset($_SESSION['message'])) {
		print_r( $_SESSION['message']);
	}
}

?>