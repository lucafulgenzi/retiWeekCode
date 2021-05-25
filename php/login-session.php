<!DOCTYPE html>
<html lang=it>
<head>
  <meta charset="UTF-8">
  <title>Luca Fulgenzi - Reti WeekCode</title>
</head>
<body>

<?php
  if(($_GET['username'] == 'luca') && ($_GET['password'] == 'ciao123')){
    include('session_write.php');
    include('session_read.php');
    include('session_delete.php');
    include('session_read.php');
  }else{
    header("location: ../404.html");
  }

?>

<a href="../index.html"> BACK TO HOME </a>

</body>
</html>
