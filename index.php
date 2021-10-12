<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include __DIR__ .  "/partials/database.php"?>
    <link rel="stylesheet" href="style/style.css">
    <title>Dischi</title>
</head>
<body>
    <header>
        <img alt="Spotify logo" src="img/logo-spotify.png">
    </header>
    <?php
        foreach ($db as $details){
            echo "<img src={$details['poster']} alt='poster {$details['title']}'>";
            echo "<h2>" . $details["title"] . "<br>";
            echo "<h3>" . $details["author"] . "<br>";
            echo "<h3>" . $details["genre"] . "<br>";
            echo "<h3>" . $details["year"] . "<br>";
        }
    ?>
</body>
</html>