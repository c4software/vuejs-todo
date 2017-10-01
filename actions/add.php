<?php

/**
 * Add a new item in the todolist
 */

 session_start();

// Test if Session todos is correctly set
 if(!is_array($_SESSION["todos"])){
   $_SESSION["todos"] = array();
 }

// Add to history if texte present in the post
 if($_POST["texte"] != ""){
    $todo = array("id" => uniqid(), "texte" => $_POST["texte"], "date" => time(), "termine" => false);
    array_unshift($_SESSION["todos"], $todo);
}

// Redirect
header('Location: ../');
 ?>
