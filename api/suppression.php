<?php
  session_start();
  include("../libs/functions.php");
  header("content-type: application/json");

  $id = $_GET["id"];
  // id in parameters ?
  if($id != ""){
    // If todo exist in session.
    if (array_key_exists($id, $_SESSION["todos"]) && $_SESSION["todos"][$id]["termine"]){
      unset($_SESSION["todos"][$id]);
      echo json_encode(array("success" => true));
    }else{
      echo json_encode(array("success" => false));
    }
  }else{
    echo json_encode(array("success" => false));
  }
