<?php

define('PROJECT_PATH', dirname(dirname(__FILE__)));

//  setup paths
$root = dirname(PROJECT_PATH);
$sglLibDir = $root .'/sgl2/src/lib';

// set include_path
set_include_path(get_include_path() . PATH_SEPARATOR . $sglLibDir);

function autoload($className)
{
    $fileName = str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
    require $fileName;
}

spl_autoload_register('autoload');

$output = '';
try {
    $front = new SGL2_Controller_Front();
    $output = $front->bootstrap()->dispatch();

} catch (Exception $e) {
    print '<pre>'; print_r($e);
}

echo $output;

?>