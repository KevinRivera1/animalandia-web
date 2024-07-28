<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🚀 Juego de Memoria 🐵</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../styles.css/game.css">
</head>

<body>
    <main>
        <div class="container__actions">
            <div class="titulo__game">
                <h1>¡Bienvenidos a la Aventura de la Memoria! 🌟</h1>
            </div>
            <div class="message" id="winMessage">
                ¡Has ganado!
            </div>
            <button class="restart-btn" onclick="restartGame()">Reiniciar Juego</button>
        </div>
        <div class="memory-game">
            <?php
            $images = ['costa1', 'costa9', 'eslider4', 'galapagos2', 'galapagos7', 'oriente7'];
            $cards = array_merge($images, $images);
            shuffle($cards);

            foreach ($cards as $image) {
                echo '<div class="memory-card" data-framework="' . $image . '">
                        <img class="front-face" src="../assets/img/' . $image . '.png" alt="' . $image . '">
                        <img class="back-face" src="../assets/img/back.png" alt="Memory Card">
                    </div>';
            }
            ?>
        </div>

    </main>
    <script src="../js/game.js"></script>
</body>

</html>