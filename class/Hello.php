<?php
class Hello{
  public  $name;
    public function __construct($name){
      $this->name=$name;
      //__toString();
    }
    public function __toString(){
      //return '<h2>Привет'.$this->name.'</h2>';
      return '<h1>Привет '.$this->name.'</h1>';
    }
}
