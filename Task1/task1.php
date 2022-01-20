<?php
Class Task1 {
  public function returnScores($data, $pattern=" "){
    if(strpos($data, " ")){
      return explode($pattern, $data);
    }else{
      return str_split($data);
    }
  }
}

$task = new Task1();
$data = 123;
// $data = "Asadasok akokdo";
$result = $task->returnScores($data);
print_r($result);
?>
