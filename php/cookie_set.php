<?php
  $name = $_GET['username'];
  if (!isset($_COOKIE[$name])) {
    setcookie($name, '222', strtotime("+1 year"));
  }

