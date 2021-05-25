<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="it">
<head>
    <title>Luca Fulgenzi - Reti WeekCode - Cookie</title>
</head>
<body>
  <h1> PHP COOKIE ADMINISTRATION </h1>

  <?php
    if(($_GET['username'] == 'luca') && ($_GET['password'] == 'ciao123')){

      include('cookie_set.php');
      include('cookie_read.php');
      include('cookie_delete.php');
      include('cookie_read.php');
    }else{
      header("location: ../404.html");
    }
  ?>

  <a href="../index.html"> BACK TO HOME </a>




</body>
</html>



