<?php
/*$verb = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['PATH_INFO'];
$routes = explode("/", $uri);*/
error_reporting(E_ALL);
ini_set('display_errors', 1);


function readall(){ 
    $dbhandle = new PDO("sqlite:../forum.db") or die("Failed to open DB");
    if (!$dbhandle) die ($error);
    $query = "SELECT id, author, content, timestamp FROM Messages;";
    $statement = $dbhandle->query($query);
    echo $dbhandle->errno;
    echo $dbhandle->error;
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

  //if ($verb == "GET"){
    //$results = json_decode(); - need to figure this one out
    $results = readall();
    header('HTTP/1.1 200 OK');
    header('Content-Type: application/json');
    echo json_encode($results);
  //} else if ($verb == "POST"){
    /*$author = "person";
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
  }*/
?>
