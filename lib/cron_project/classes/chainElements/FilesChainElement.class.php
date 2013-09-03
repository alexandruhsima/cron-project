<?php 

class FilesChainElement extends ChainElement {

  public function execute() {
    $path = BASE_PATH.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'excel_files';
    $handle = opendir($path);
    
    $files = array();
    while (false !== ($entry = readdir($handle))) {
      if($entry != "." && $entry != "..") {
        $files[] =  $path.DIRECTORY_SEPARATOR.$entry;
      }
    }
    closedir($handle);
    
    
    ChainParametersHolder::getInstance()->add('files', $files);
    
    // execute the successor
    $this->executeSuccessor();
  }

}
