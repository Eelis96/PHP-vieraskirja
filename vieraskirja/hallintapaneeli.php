<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hallintapaneeli</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <h1>Hallintapaneeli</h1>

    <button onclick="takaisin()">Takaisin Etusivulle</button><br><br>

    <?php
        $toimi = "";
        if(isset($_GET['success'])){
            $toimi = "Viestit Poistettu!";
            echo "$toimi";
        }
    ?>
    <form action="vieraskirjakoodi.php" method="POST">
    <input type="submit" name="poista" value="Poista viestit">
    </form>
    <script src="scripti.js"></script>
</body>
</html>