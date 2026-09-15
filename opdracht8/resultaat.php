<!doctype php>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Les 8+9</title>
  </head>

  <body>
    <?php
        $vnaam = $_POST['voornaam'];
        $anaam = $_POST['achternaam'];
        $gjaar = $_POST['geboortejaar'];
        $currentyear = date('Y');
        $age = $currentyear - $gjaar;
        echo "<h1>Hallo ".$vnaam." ".$anaam."</h1>";  
        echo "<p>U bent ".$age." jaar oud.</p>";
    ?>
  </body>
</html>