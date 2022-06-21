<?php
$rootPath = dirname(__DIR__);
$loader = require($rootPath . '/vendor/autoload.php');
$loader->addPsr4('Be\\Data\\', $rootPath . '/data');

$runtime = new \Be\Runtime\Driver\Common();
$runtime->setRootPath(__DIR__);
\Be\Be::setRuntime($runtime);
$runtime->execute();
