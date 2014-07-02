<?php

/**
*
*
*/


try {
	require_once 'lib/base.php';
    require_once 'lib/template.php';


    $system_path = 'system';

    define('BASEPATH', str_replace('\\', '/', $system_path));

	OC::handleRequest();

    $main = new Template('views/mainView.php', array('title'=>'example page', 'leftMessage'=>'left', 'centerMessage'=>'centerMessage'));

    $main->render();
} catch (Exception $ex) {
	//error logger

	//show the user a detailed error page
}
