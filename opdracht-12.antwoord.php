<!doctype php>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Antwoord</title>
  </head>

  <body>
<?php

        $nummer1 = $_POST['nummer1'];
        $nummer2 = $_POST['nummer2'];
        
            if($_POST['actie'] == 'plus')
                {
                    $result = $nummer1 + $nummer2;
                }
            if($_POST['actie'] == 'min')
                {
                   $result = $nummer1 - $nummer2;
                }
            if($_POST['actie'] == 'keer')
                {
                    $result = $nummer1 * $nummer2;
                }
            if($_POST['actie'] == 'delen')
                {
                    $result = $nummer1 / $nummer2;
                }
                echo "Het resultaat is: ".$result;      
            
  ?>
</body>
</html>

