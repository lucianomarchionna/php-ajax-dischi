<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require __DIR__ .  "/partials/database.php"?>
    <link rel="stylesheet" href="style/style.css">
    <title>Dischi</title>
</head>
<body>
    <header>
        <img alt="Spotify logo" src="img/logo-spotify.png">
    </header>
    <main>
        <div class="main-dimension">
            <div class="container-album">
                <?php
                    foreach ($db as $details){
                        echo "
                        <div class='album'>
                            <div class='image'>
                                <img src={$details['poster']} alt='poster {$details['title']}'>
                                <h3 class='title'>
                                    {$details['title']}
                                </h3>
                                <div>
                                    <h5 class='author'>
                                        {$details['author']}
                                    </h5>
                                    <h5 class='year'>
                                        {$details['year']}
                                    </h5>
                                </div>
                            </div>
                        </div>
                        ";
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>