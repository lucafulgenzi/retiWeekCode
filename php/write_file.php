<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-type" content="text/html;charset=utf-8">
<title>Read a serialized file</title>
</head>

<body>

<?php
  $user = $_GET['username'] . '-' . $_GET['password'] . '-' . $_GET['email'] . '-' . $_GET['date'];

  if( file_exists("../files/users.txt") ){
    $old_users = unserialize(file_get_contents("../files/users.txt"));

    if($old_users){
      $new_user = $old_users . '|' . $user;
    }else{
      $new_user = $user;
    }
  }else{
    $new_user = $user;
  }



  if (file_put_contents("../files/users.txt", serialize($new_user)) ){
    echo '<p>User successfully saved</p>';
  } else {
    echo '<p style="color:red;">Failed to store $user array in users.txt file!</p>';
  }
?>

<a href="read_file.php">Go to read the users array out of users.txt file.</a>

</body>
</html>
