<?php 

class ChainParametersHolder {
  private $_params = array();
  
  private static $_instance = null;
  
  private function __construct() {
    
  }
  
  public static function getInstance() {
    if( is_null( static::$_instance ) ) {
        static::$_instance = new ChainParametersHolder();
    }
    return static::$_instance;
  }
  
  public function add( $name = null, $value = null ) {
    if( !empty($name) && !empty($value) ) {
        $this->_params[$name] = $value;
    }
  }
  
  public function get( $name = null ) {
     if( is_null( $name ) ) {
         throw new Exception(__CLASS__.":: Can't return an empty param. thrown in ".__FUNCTION__, E_USER);
     }
     return $this->_params[$name];
  }
}
