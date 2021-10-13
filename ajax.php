<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.23.0/axios.min.js" integrity="sha512-Idr7xVNnMWCsgBQscTSCivBNWWH30oo/tzYORviOCrLKmBaRxRflm2miNhTFJNVmXvCtzgms5nlJF4az2hiGnA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="style/style.css">
    <title>Dischi ajax</title>
</head>
<body>
    <div id="app">
        <header>
            <img alt="Spotify logo" src="img/logo-spotify.png">
        </header>
        <main>
            <div class="main-dimension">
                <div class="container-album">
                    <div v-for="album in albums" class='album'>
                        <div class='image'>
                            <img :src="album.poster" :alt="album.title">
                            <h3 class='title'>
                                {{album.title}}
                            </h3>
                            <div class="info">
                                <h5 class='author'>
                                    {{album.author}}  
                                </h5>
                                <h5 class='year'>
                                    {{album.year}} 
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="javascript/main.js"></script>
</body>
</html> 