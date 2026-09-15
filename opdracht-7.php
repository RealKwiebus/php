<!doctype php>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Les 7</title>
  </head>

  <body>
    <?php
        date_default_timezone_set('Europe/Amsterdam');
        $dag = date('d');
        $maand = date('M');
        $jaar = date('Y');
        $uur = date('H');
        $minuut = date('m');
        $seconden = date('s');
        echo "Het is vandaag: ".$dag." - ".$maand." - ".$jaar."<br>\n";
        echo "De tijd is: ".$uur.":".$minuut.":".$seconden."\n";
    ?>
  </body>
</html>