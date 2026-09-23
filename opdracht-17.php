<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Les 17</title>
</head>

<body>

    <h1>Faculteit Berekenen</h1>

    <form method="post" action="">
        <p>
            Geef een getal:
            <input type="text" name="getal">
        </p>

        <input type="submit" value="Bereken faculteit">
    </form>

    <?php
    if (isset($_POST["getal"])) {
        $getal = $_POST["getal"];
        $totaal = 1;
        is_numeric($getal) or die("Je moet wel een getal invullen");
        for ($teller = $getal; $teller >= 1; $teller--) {
            $totaal *= $teller;
        }

        echo "De faculteit van " . $getal . " is " . $totaal . "<br>\n";
    }
    ?>

</body>
</html>

