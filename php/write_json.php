<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-type" content="text/html;charset=utf-8">
<title>Read a serialized file</title>
</head>

<body>

<?php

  $user = array(
    "username" => $_GET['username'],
    "password" => $_GET['password'],
    "email" => $_GET['email'],
    "date" => $_GET['date'],
  );

  $myJSON = json_encode($user);

  if (file_put_contents("../files/users.json", $myJSON)){
    echo '<p>User successfully saved</p>';
  } else{
    echo '<p style="color:red;">Failed to store $persons array in persons.json file!</p>';
  }
?>

<a href="read_json.php">Go to read the users array out of users.json file.</a>


</body>
</html>
