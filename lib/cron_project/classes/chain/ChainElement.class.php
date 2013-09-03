<?php 

abstract class ChainElement {
  protected $_paramsHolder = null;
  protected $_successor = null;

  
  public function setSuccessor($objSuccessor) {
    $this->_successor = $objSuccessor;
  }
  
  public function getSuccessor() {
    return $this->_successor;
  }
  
  abstract function execute();
  
  public function executeSuccessor() {
    
    if(!is_null($this->_successor) && gettype($this->_successor) == "object") {
      $this->_successor->execute();
    }
  }
  
}
