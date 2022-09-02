<?php
// 使用软链接外挂 www 目录时，使用 $_SERVER['DOCUMENT_ROOT'] 获取
// $rootPath =  dirname($_SERVER['DOCUMENT_ROOT']);
$rootPath = dirname(__DIR__);
$loader = require($rootPath . '/vendor/autoload.php');
$loader->addPsr4('Be\\Data\\', $rootPath . '/data');

$runtime = new \Be\Runtime\Driver\Common();
$runtime->setRootPath($rootPath);
\Be\Be::setRuntime($runtime);
$runtime->execute();

