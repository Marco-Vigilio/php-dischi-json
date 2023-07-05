<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image/favicon.ico" >
    <link rel="stylesheet" href="./style/style.css">
    <title>php-dischi-json</title>
</head>
<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>

    <div class="header">
        <div class="image"><img src="./image/logo.svg" alt="Logo Spotify"></div>
    </div>

    <div id="app" class="contain">
        <div class="items">
            <div class="item" v-for="element in object">
                <div class="image">
                    <img :src="element.poster" :alt="element.title + ' poster' ">
                </div>
                <div class="info">
                    <p class="bold">{{element.title}}</p>
                    <p>{{element.author}}</p>
                    <p class="bold">{{element.year}}</p>
                </div>
                
            </div>
        </div>
    </div>
    <script src="script/myscript.js"></script>
</body>
</html>