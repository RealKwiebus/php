<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Duitsland Antwoorden</title>
</head>
<body>
    <?php    
    $antwoord = $_POST['Hoofdstad'];
    if ($antwoord == "berlijn") {
        echo "Je antwoord op de vraag was: ".$antwoord;
        echo "<br>Goed geantwoord!";
        } else {
        echo "Je antwoord op de vraag was: ".$antwoord;
        echo "<br>Dat klopt helaas niet!";
    }
?>
</p>
</form>
</body>
</html>