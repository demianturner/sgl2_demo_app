<?php

define('PROJECT_PATH', dirname(dirname(__FILE__)));

//  setup paths
$root = dirname(PROJECT_PATH);
$sglLibDir = $root .'/sgl2/src/lib';

set_include_path(get_include_path() . PATH_SEPARATOR . $sglLibDir);

//	setup autoloader
require $sglLibDir.'/Uber.php';
Uber::init();
Uber_Loader::addAutoloadPattern(array(
    'preg_replace'=> array(
        '_'=>'/'),
        'suffix'=>'.php',
        'basedir'=>get_include_path()));
Uber_Loader::registerNamespace('Uber', $sglLibDir);
Uber_Loader::registerNamespace('SGL2', $sglLibDir);
Uber_Loader::registerNamespace('Zend', $sglLibDir);
Uber_Loader::registerNamespace('Horde', $sglLibDir);

$output = '';
try {
    $front = new SGL2_Controller_Front();
    $output = $front->bootstrap()->dispatch();

} catch (Exception $e) {
    print '<pre>'; print_r($e);
}

echo $output;

?>