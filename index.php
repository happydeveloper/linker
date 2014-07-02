<?php

/**
*
*
*/


try {
	require_once 'lib/base.php';

	OC::handleRequest();
} catch (Exception $ex) {
	//error logger

	//show the user a detailed error page
}
