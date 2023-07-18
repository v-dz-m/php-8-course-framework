<?php

if (PHP_MAJOR_VERSION < 8) {
    die('Необходима версия PHP >= 8.0');
}

require_once dirname(__DIR__) . "/config/init.php";

new \wfm\App();

//\wfm\App::$app->setProperty('test', 'TEST');
//echo \wfm\App::$app->getProperty('pagination') . '<br>';
//var_dump(\wfm\App::$app->getProperties());
