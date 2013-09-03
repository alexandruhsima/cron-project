<?php 

class ChainBuilder {
  
  private static $_instance = null;
  
  private function __construct() {
    
  }
  
  public static function getInstance() {
    if(is_null(static::$_instance)) {
      static::$_instance = new ChainBuilder();
    }
    return static::$_instance;
  }
  
  public function getChain() {
    
    $path = BASE_PATH.DIRECTORY_SEPARATOR.'lib'.DIRECTORY_SEPARATOR.PROJECT_NAME.DIRECTORY_SEPARATOR."classes".DIRECTORY_SEPARATOR.'chainElements';
    
    $chainElements = array();
    $chainElements = scandir($path);
    unset($chainElements[0]); // '.'
    unset($chainElements[1]);// '..'

    $chainElement = null;
    $chain = new Chain();
    while( current($chainElements) ) {
      
      $className = str_replace(CLASS_SUFFIX . ".php", "", current($chainElements));
      if( $className == "." || $className == ".." || empty($className)) {
        continue;
      }
      $chainElement = new $className();
      
      $chain->setLastSuccessor($chainElement);
      
      next($chainElements);
    }
        
        
    return $chain;
  }
  
}
