<!doctype php>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Les 20</title>
  </head>

  <body>
    <?php
    $weekdagen = array("maandag", "dinsdag", "woensdag", "donderdag", "vrijdag", "zaterdag", "zondag");

    $i = 0;
    while ($i < count($weekdagen)) {
        echo $weekdagen[$i];
        print "<br>";
        $i++;
    }
    ?>

  </body>
</html>
