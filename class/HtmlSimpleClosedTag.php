<?php
class HtmlSimpleClosedTag{
  public $tag;
  public $content;
  public $name;
  public $in_class;
  public $id;

  public function __construct($tag,$content, $in_class='',$name='',$id=''){
    $this->tag=$tag;
    $this->content=$content;
    $this->name=$name;
    $this->in_class=$in_class;
    $this->id=$id;

    echo '<'.$this->tag.' class="'.$this->in_class.'">'.$this->content.'</'.$this->tag.'>';
  }
  /*public function __toString(){
    echo '<'.$this->tag.'>'.$this->content.'</'.$this->tag.'>';
  }*/
}
