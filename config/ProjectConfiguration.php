<?php 
define("PROJECT_NAME", 'cron_project');
define('CLASS_SUFFIX', ".class");


define("BASE_PATH", realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . ".."));


// the Propel Autoloader file
require_once BASE_PATH . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . PROJECT_NAME . DIRECTORY_SEPARATOR . "Propel" . DIRECTORY_SEPARATOR . "runtime" . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "Propel.php";

//init the orm based on the config
Propel::init(BASE_PATH  .  DIRECTORY_SEPARATOR . "config" . DIRECTORY_SEPARATOR . PROJECT_NAME . "-conf.php");

// the orm classes
set_include_path(BASE_PATH . DIRECTORY_SEPARATOR . "config" . DIRECTORY_SEPARATOR . PATH_SEPARATOR . BASE_PATH . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . PROJECT_NAME . "model" . PATH_SEPARATOR . get_include_path());

// include the PHPExcel library
require_once(BASE_PATH . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "PHPExcel" . DIRECTORY_SEPARATOR . "Classes" . DIRECTORY_SEPARATOR . "PHPExcel.php");

// create the autoload function for my classes
function autoload($className) {
  $file = BASE_PATH . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . PROJECT_NAME . DIRECTORY_SEPARATOR . "classes" . DIRECTORY_SEPARATOR . "chain" . DIRECTORY_SEPARATOR . $className . CLASS_SUFFIX . ".php";
  if(file_exists($file))
  {
    require_once($file);
  }
  
  $file = BASE_PATH . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . PROJECT_NAME . DIRECTORY_SEPARATOR . "classes" . DIRECTORY_SEPARATOR . "chainElements" . DIRECTORY_SEPARATOR . $className . CLASS_SUFFIX . ".php";
  if(file_exists($file))
  {
    require_once($file);
  } 
  
}


spl_autoload_register("autoload");
