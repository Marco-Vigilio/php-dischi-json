<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>php-dischi-json</title>
</head>
<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <div id="app">
        <div class="items">
            <div class="item" v-for="element in object">
                <div>
                    <img :src="element.poster" :alt="element.title + ' poster' ">
                </div>
                <div>
                    <p>{{element.title}}</p>
                    <p>{{element.author}}</p>
                    <p>{{element.year}}</p>
                </div>
                
            </div>
        </div>
    </div>
    <script src="script/myscript.js"></script>
</body>
</html>