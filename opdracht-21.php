<!doctype php>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Les 21</title>
  </head>

  <body>
    <?php
  $cijfersWiskunde = array(6.9, 8.4, 7.4, 4.4); // cijfers van vorig jaar
  $som = 0;
  for($i = 0; $i < count($cijfersWiskunde); $i++)
  {
      $som += $cijfersWiskunde[$i];
  }
  $gemiddelde = $som / count($cijfersWiskunde);
  echo "<p>Gemiddelde van wiskunde: " . $gemiddelde . "</p>";
  echo "<p>Het afgeronde cijfer is: " . round($gemiddelde,1) . "</p>";
?>

  </body>
</html>
