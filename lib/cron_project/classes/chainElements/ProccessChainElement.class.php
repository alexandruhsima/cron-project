<?php 

class ProccessChainElement extends ChainElement {
  
  private function executeUserData( $userData = array() ) {
  }
  
  private function executeCarData( $carData = array() ) {
  }
  
  public function execute() {
    set_time_limit(0);
    ini_set('memory_limit', "500M");
    $files = ChainParametersHolder::getInstance()->get('files');
    while(($path = current($files)) != false) {
      if(!is_file($path)) {
        throw new Exception("Couldn't parse '{$path}'", E_USER);
        continue ;
      }
    
      $cacheMethod = PHPExcel_CachedObjectStorageFactory::cache_to_phpTemp;
      $cacheSettings = array("memoryCacheSize" => "500MB");
      PHPExcel_Settings::setCacheStorageMethod($cacheMethod, $cacheSettings);
    
      $reader = PHPExcel_IOFactory::createReaderForFile($path);
      $reader->setReadDataOnly(true);
      
      $sheet = $reader->load($path);
      
      $resultset = array();
      $sheet = $sheet->getActiveSheet(1);
      $rowIterator = $sheet->getRowIterator();
      
      foreach( $rowIterator as $row ) {
        if( $row->getRowIndex() ==  1 || $row->getRowIndex() == 2 ) {
          continue; // skip the header rows;
        }
        $ceilIterator = $row->getCellIterator();
        $columns = array( 'car_cells' => array() , 'user_cells'=>array() );
        foreach( $ceilIterator as $cell ) {
          $column = strtoupper($cell->getColumn());
          if($column < "P" && strlen($column) == 1 ) {
            $columns['car_cells'][$column] = $cell->getValue();
          }
          else
          {
            $columns['user_cells'][$column] = $cell->getValue();
          }
        }
        $this->executeUserData($coulumns['user_cells']);
        $this->executeCarData($coulumns['car_cells']);
      }
      
    }
        
    // execute the successor
    $this->executeSuccessor();
  }
  
}
