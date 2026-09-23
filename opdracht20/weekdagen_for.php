<!doctype php>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Les 20</title>
  </head>

  <body>
    <?php
    $weekdagen = array("maandag", "dinsdag", "woensdag", "donderdag", "vrijdag", "zaterdag", "zondag");

    for ($i=0; $i < count($weekdagen); $i++) {
        echo $weekdagen[$i];
        print "<br>";
        }
    ?>

  </body>
</html>
