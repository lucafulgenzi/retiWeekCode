<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-type" content="text/html;charset=utf-8">
<title>Read a serialized file</title>

  <style>
      #users {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
      }

      #users td, #users th {
          border: 1px solid #ddd;
          padding: 8px;
      }

      #users tr:nth-child(even){background-color: #f2f2f2;}

      #users tr:hover {background-color: #ddd;}

      #users th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #4c4c4c;
          color: white;
      }
  </style>
</head>

<body>
<table id="users">
<tr>
  <th>Username</th>
  <th>Email</th>
  <th>Password</th>
  <th>Date</th>
</tr>
<?php

$users = unserialize(file_get_contents("../files/users.txt"));

$users_array = explode('|', $users);

foreach($users_array as $user) {

  $user_array = explode('-', $user);

	echo "<tr>
    <td>$user_array[0]</td>
    <td>$user_array[1]</td>
    <td>$user_array[2]</td>
    <td>$user_array[3]</td>
  </tr>" . PHP_EOL;
}

?>
</table>

<a href="../index.html"> BACK TO HOME </a>

</body>
</html>
