<?php

  $name = $_GET['username'];
  if (isset($_COOKIE[$name])){
    echo  'Cookie value: ' . $_COOKIE[$name] .'<br>' ;
  }else{
    echo 'Il cookie non esiste!<br>';
  }


