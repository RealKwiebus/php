<!doctype php>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Les 3+4</title>
  </head>

  <body>
    <?php
    $d = strtotime("21:12:0609 December 2011");
echo "de datum is vandaag: " . date("d - M - Y", $d) . "<br>";
echo "De tijd is: " . date("H:i:s", $d) . "<br>";
?>

  </body>
</html>
