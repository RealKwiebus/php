<!DOCTYPE php>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Les 22 verwerking</title>
  </head>
  <body>
    <?php
    $vakkenPakket = $_POST["pakket"];
    echo "<h1>Je hebt gekozen voor de volgende vakken:</h1>";
    echo "<ul>";
    foreach ($vakkenPakket as $vak) {
        echo "<li>" . $vak . "</li>";
    }
    echo "</ul>";
    ?>
    </body>