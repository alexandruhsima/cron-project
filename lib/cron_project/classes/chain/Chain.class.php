<?php 

class Chain extends ChainElement {
  protected $_last = null;
  
  public function __construct($successor = null) {
    $this->_paramsHolder = ChainParametersHolder::getInstance();
    if(!is_null($successor)) {
      $this->setSuccessor($successor);
    }
  }
   public function setLastSuccessor($successor) {
    $this->_last = (is_null($this->_last) ? $this : $this->_last->getSuccessor());
    if(is_null($this->_last->getSuccessor())) {
      $this->_last->setSuccessor($successor);
      $this->_last = null;
    }else {
     
      $this->setLastSuccessor($successor);
    }
  }
  
  public function execute() {
    $this->executeSuccessor();
  }
}
