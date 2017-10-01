<?php
session_start();

/*
 * Delete a task
 */

$id = $_GET["id"];

// todo in parameters ?
if($id != ""){

  // If todo exist in session.
  if (array_key_exists($id, $_SESSION["todos"]) && $_SESSION["todos"][$id]["termine"]){
    unset($_SESSION["todos"][$id]);
  }
}

// Redirect
header('Location: ../');

?>
