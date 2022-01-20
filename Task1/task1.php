<?php
Class Task1 {
  private $scores = array();

  public function __construct(){
    $this->scores = array();
  }

  public function returnScores(){
    return json_encode($this->scores);
  }
}
?>
