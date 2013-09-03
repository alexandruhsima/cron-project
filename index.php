<?php 
echo "<pre>";
ini_set('display_errors','on');

require_once "config".DIRECTORY_SEPARATOR."ProjectConfiguration.php";

$chain = ChainBuilder::getInstance()->getChain();

$chain->execute();

//echo "<pre>";
//print_r($chain);
//echo "</pre>";
