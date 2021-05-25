<?php
  if( isset($_SESSION) ){
    echo "Session username: " . $_SESSION["username"] . '<br>';
    echo "Session password: " . $_SESSION["password"] . '<br>';
    echo "Session time : " . $_SESSION["time"] . '<br>';
    echo "Session ID: " . session_id() . '<br>';
    print_r($_SESSION);
    echo "<br>";
  }