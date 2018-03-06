<?php
    $db = mysqli_connect("localhost", "mbluestein88", "#Mattblue88", "mblueste_login");
    if (session_status() == PHP_SESSION_NONE) {
        if(session_id() == '') {
    		//session_start();
	}
    }
    if(mysqli_connect_errno()){
        echo 'Database connection failed with the following errors: ' . mysqli_connect_error();
        die();
    }
?>