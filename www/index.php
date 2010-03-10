<?php

define('PROJECT_PATH', dirname(__DIR__));

require 'Uber.php';
Uber::init();

//  sgl libs
$root = dirname(dirname(__DIR__));
$sglLibDir = $root .'/sgl2/src/lib';
Uber_Loader::registerNamespace('SGL2', $sglLibDir);
Uber_Loader::registerNamespace('Zend', $sglLibDir);

try {
    $front = new SGL2_Controller_Front();
    $output = $front->bootstrap()->dispatch();

} catch (Exception $e) {
    print '<pre>'; print_r($e);
}

echo $output;

?>