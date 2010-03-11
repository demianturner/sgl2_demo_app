<?php

define('PROJECT_PATH', dirname(dirname(__FILE__)));

//  sgl libs
$root = dirname(dirname(dirname(__FILE__)));
$sglLibDir = $root .'/sgl2/src/lib';

require $sglLibDir.'/Uber.php';
Uber::init();
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