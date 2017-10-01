<?php
  session_start();
  include("libs/lib_tpl.php");
  include("libs/functions.php");

  init_todos();
  $t = new Template();

  $t->set_file("tpl","templates/main.html");
  $t->set_var("todos", $_SESSION["todos"]);
  $t->pparse("tpl");
?>
