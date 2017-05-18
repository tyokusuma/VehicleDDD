<<?php
class Human {
  public static $populasi= 0;
  public $name;

  public function __construct($name){
    $this->name = name;
    static::$populasi ++;
  }
}



?>
