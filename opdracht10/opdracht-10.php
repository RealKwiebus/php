<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Een ingewikkelder formulier</title>
</head>
<body>

<form method="post" action="form2afhandeling.php">

    <p>voornaam:
        <input type="text" size="20" name="voornaam">
    </p>

    <p>achternaam:
        <input type="text" size="20" name="achternaam">
    </p>

    <p>geslacht:
        <input type="radio" name="geslacht" value="man" checked>Mannelijk
        <input type="radio" name="geslacht" value="vrouw">Vrouwelijk
        <input type="radio" name="geslacht" value="anders">Anders
    </p>

    <p>profiel:
        <select name="profiel">
            <option>NT</option>
            <option>NG</option>
            <option>EM</option>
            <option>CM</option>
        </select>
    </p>

    <p>geboortejaar:
        <select name="geboortejaar">
            <?php
            for ($jaar = date('Y'); $jaar >= 2000; $jaar--)
            {
                echo "<option>" . $jaar . "</option>";
            }
            ?>
        </select>
    </p>

    <p>
        <input type="submit" value="verstuur">
    </p>

</form>

</body>
</html>