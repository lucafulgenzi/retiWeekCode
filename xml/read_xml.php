<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="it">
<head>
    <title>Luca Fulgenzi - Reti WeekCode - XML</title>
</head>
<body>
  <h1 style="text-align: center;"> PHP READ XML FROM PHP </h1>

  <?php
    $xml_file = simplexml_load_file("letter.xml");
    echo "From: " . $xml_file->from . "<br />";;
    
    $to_list = array();
    foreach($xml_file->to as $to){
        echo "To: " . $to_list = ($to) . PHP_EOL . "<br />";
    }

    echo "Date: " . $xml_file->date . "<br />";;
    echo "Message: " . $xml_file->message . "<br />";;
  ?>

  <a href="../index.html"> BACK TO HOME </a>




</body>
</html>



