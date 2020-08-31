<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <h2>Vieraskirja</h2><br>
    <button onclick="kirjaudu()">Hallintapaneeli</button><br><br>
    <?php
    
    $virhe = "";
    if(isset($_GET['error'])){
        $virhe = "Täytä kaikki tyhjät Kentät!";
        echo "$virhe";
    }
    
    $toimi = "";
    if(isset($_GET['success'])){
        $toimi = "Kiitos Viestistä!";
        echo "$toimi";
        echo '<pre>' . file_get_contents("vieraat.txt") . '</pre>';
    }
    
    ?>

    <form action="vieraskirja.php" method="POST">
        <label for="nimi">Nimi:</label>
        <input type="text" id="nimi" name="knimi"><br>
        <label for="viesti">Viesti:</label>
        <textarea name="kviesti" id="viesti" cols="20" rows="5"></textarea><br>
        <input type="submit" name="submit">
    </form>

    <script src="scripti.js"></script>
</body>
</html>