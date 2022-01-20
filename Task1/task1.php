<?php
Class Task1 {
  public function returnArray($data, $pattern=" "){
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
$result = $task->returnArray($data);
print_r($result);
?>
