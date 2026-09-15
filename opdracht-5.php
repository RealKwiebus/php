<!doctype php>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Les 3+4</title>
  </head>

  <body>
    <?php
        date_default_timezone_set('Europe/Amsterdam');
        if (date('I') == 1) {
            echo "Het is zomertijd";
        } else {
            echo "Het is wintertijd";
        }
    ?>

  </body>
</html>
