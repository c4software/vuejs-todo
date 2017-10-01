<?php
session_start();

/**
 * Add a new item in the todolist
 */

// Add to history if texte present in the post
 if($_POST["texte"] != ""){
    $todo = array("id" => uniqid(), "texte" => $_POST["texte"], "date" => time(), "termine" => false);
    $_SESSION["todos"][$todo["id"]] = $todo;
}

// Redirect
header('Location: ../');
 ?>
