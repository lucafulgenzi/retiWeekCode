<?php
  $name = $_GET['username'];
  unset($_COOKIE[$name]);
  echo "Cookie deleted successfully <br>";
