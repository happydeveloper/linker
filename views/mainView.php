<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title><?php echo $this->title; ?></title>
</head>
<body>
	<h2><?php echo $this->title; ?></h2>
	<div id='left'><?php  $this->leftMenu->render(); ?></div>
	<div id='center'><?php $this->centerContent->render(); ?></div>
</body>
</html>
