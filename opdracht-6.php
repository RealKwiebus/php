<!doctype php>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Les 3+4</title>
  </head>

  <body>
    <?php
        // timezone
        date_default_timezone_set('Europe/Amsterdam');
        
        $uur = date('H');
        if($uur >= 0 && $uur <6) {
            echo "Goedenacht";
        }
        elseif($uur >= 6 && $uur <12) {
            echo "Goedemorgen";
        }
        else if($uur >= 12 && $uur <18) {
            echo "Goedemiddag";
        }
        else if($uur >= 18 && $uur <24) {
            echo "Goedenacht";
        }
    ?>

  </body>
</html>
