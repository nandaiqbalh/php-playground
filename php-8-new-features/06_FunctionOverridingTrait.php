<?php

/**
 *
 */
trait sampleTrait{

  public abstract function sampleFunction(string $name) : void;
}

class sampleClass{

  use sampleTrait;

  public function sampleFunction(string $name){

  }
}

?>
