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

	//OC::handleRequest();

    $main = new Template('views/mainView.php', array(
        'title' => 'Everything is Networks.',
        'leftMenu' => new Template('views/linkView.php', array('links' => $links)),
        'centerContent' => new Template('views/homeView.php', array('date' => date())),
    ));

    $main->render();
} catch (Exception $ex) {
	//error logger

	//show the user a detailed error page
}
