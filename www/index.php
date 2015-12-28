<?php

// Uncomment this line if you must temporarily take down your site for maintenance.
// require __DIR__ . '/.maintenance.php';

// For deployment
if(file_exists(__DIR__ . '/../../.htdeployment.running')){
	require __DIR__ . '/.maintenance.php';
}

$container = require __DIR__ . '/../app/bootstrap.php';

$container->getByType('Nette\Application\Application')->run();
