<?php
$verb = $_SERVER['REQUEST_METHOD'];

  if ($verb == "GET"){
    echo "text";
    //$results = json_decode(); - need to figure this one out
    header('HTTP/1.1 200 OK');
    header('Content-Type: application/json');
    echo json_encode($results);
  }else if ($verb == "POST"){
    $author = "person";
    $message = "text";
    if(isset($_POST($author)){
      $author = $_POST["author"];
    }
    if(isset($_POST($message)){
      $message = $_POST["message"];
    }
    echo "$author : $message";
    header('HTTP/1.1 200 OK');
    header('Content-Type: application/json');
    echo json_encode($results);
  }else{
    echo "USAGE GET or POST";
  }
?>
