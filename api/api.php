<?php
$verb = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['PATH_INFO'];
$routes = explode("/", $uri);

$dbhandle = new PDO("sqlite:forum.db") or die("Failed to open DB");
if (!$dbhandle) die ($error);

function readall(){ 
    $query = "SELECT * FROM Messages";
    $statement = $dbhandle->prepare($query);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
};

  if ($verb == "GET"){
    //$results = json_decode(); - need to figure this one out
    $results = readall();
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