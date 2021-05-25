<?php

  if (!isset($_SESSION)) {
    session_start();
    $_SESSION["username"] = "$_GET[username]";
    $_SESSION["password"] = "$_GET[password]";
    $_SESSION['time'] = time();
    echo "Session variables are set.<br>";
  }
?>