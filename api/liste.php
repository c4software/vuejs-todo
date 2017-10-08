<?php
  session_start();
  include("../libs/functions.php");
  header("content-type: application/json");

  init_todos();

  // List task
  echo json_encode($_SESSION["todos"]);

?>
