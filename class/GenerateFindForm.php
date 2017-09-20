<?php
class GenerateFindForm{
    private $input_array;
    public $url_action;

    public function __construct($input_array){
      //$this->input_array=$input_array;
      $this->input_array=[
        0=>['var1'=>'Name_var1','var2'=>'Name_var2'],
        1=>['var4'=>'Name_var4','var5'=>'Name_var5','var6'=>'Name_var6'],
        2=>['var7'=>'Name_var7'],
        3=>['var8'=>'Name_var8','var9'=>'Name_var9','var10'=>'Name_var10','var11'=>'Name_var11'],];
    }

    public function set($param=[]){
      if(!empty($param)){
        foreach($param as $key=>$value){
            if(property_exists('GenerateFindForm', $key)){
              $this->$key=$value;
            }
        }
      }
    }

    public function get(){
            echo $this->getStartForm();
      foreach ($this->input_array as $key => $value) {
          $col_row=count($value);
            echo $this->getStartLine();
              foreach($value as $k =>$v){
                echo $this->getItem($v,$k,$col_row);
              }
          echo $this->getEndLine();
      }
      echo $this->getEndForm();
    }

    private function getStartForm(){
      return '<form class="form-horizontal" role="form" action="'.$this->url_action.'">';
    }
    private function getEndForm(){
      return '<div class="text-right">
                <button type="submit" class="btn btn-primary">Найти</button>
              </div>  
              </form>';
    }
    private function getStartLine(){
      return '<div class="row">
                <div class="form-group">
                ';
    }
    private function getEndLine(){
      return '</div></div>';
    }
    private function getItem($label,$id,$col_row){
      //if($col_row==3){$size_col=4;}
      //if($col_row==2){$size_col=6;}
      $size_col=12/$col_row;
      return '<div class="col-xs-'.$size_col.'"><label for="'.$id.'">'.$label.'</label>
                <input type="input" class="form-control"
                id="'.$id.'" name="'.$id.'"
                placeholder="Введите '.$label.'"></div>';
    }
}
