<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-type" content="text/html;charset=utf-8">
<title>Read a serialized file</title>
</head>

<body>

<?php

  $json = file_get_contents('../files/users.json');
  $json_data = json_decode($json,true);
  print_r($json_data);

?>


<a href="../index.html"> BACK TO HOME </a>

</body>
</html>
