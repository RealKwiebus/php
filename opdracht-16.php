<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Les 16</title>
</head>

<body>

    <h1>Vermenigvuldigingstafel</h1>

    <form method="get" action="">
        <p>
            Geef een getal kleiner dan 100:
            <input type="text" name="getal">
        </p>
        <p>
            Geef het aantal keer dat je de tafel wilt zien:
            <input type="text" name="teller">
        </p>
        <input type="submit" value="Toon tafel">
    </form>

    <?php
    if (isset($_GET["getal"]))
    {
        $getal = $_GET["getal"];
        is_numeric($getal) or die("Je moet wel een getal invullen");
        echo "<h2>De tafel van " . $getal . "</h2>";

        for ($teller = 1; $teller <= $_GET["teller"]; $teller++)
        {
            echo $getal . " x " . $teller . " = " . ($getal * $teller) . "<br>\n";
        }
    }
    ?>

</body>
</html>