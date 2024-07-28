<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🐢 GALÁPAGOS</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../styles.css/pages.css">
    <link rel="stylesheet" href="../styles.css/card.css">
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
</head>

<body>

    <main>
        <?php require '../components/header.php'; ?>

        <section class="swiffy-slider slider-nav-animation slider-nav-animation-mycustomanimation">
            <ul class="slider-container">
                <li><img src="../assets/img/galapagos1.png" style="max-width: 100%;height: auto;border-radius:1rem;"></li>
                <li><img src="../assets/img/galapagos2.png" style="max-width: 100%;height: auto;border-radius:1rem;"></li>
                <li><img src="../assets/img/galapagos3.png" style="max-width: 100%;height: auto;border-radius:1rem;"></li>
                <li><img src="../assets/img/galapagos4.png" style="max-width: 100%;height: auto;border-radius:1rem;"></li>
            </ul>

            <button type="button" class="slider-nav"></button>
            <button type="button" class="slider-nav slider-nav-next"></button>

            <div class="slider-indicators">
                <button class="active"></button>
                <button></button>
                <button></button>
            </div>
            <div class="hero-description">
                <h1>¡Bienvenidos a las Maravillosas Islas Galápagos!</h1>
                <p>Las Islas Galápagos son un paraíso mágico lleno de animales increíbles y paisajes asombrosos. Ubicadas en el océano Pacífico, estas islas son hogar de tortugas gigantes, iguanas que parecen dragones y muchas aves únicas en el mundo. ¡Prepárate para una aventura inolvidable en las Galápagos!</p>
            </div>
        </section>

        <section id="proteger-animales" class="prevencion">
            <h2>¡Ayudemos a los Animales de Galápagos!</h2>
            <p>Las Islas Galápagos necesitan de nuestra ayuda para proteger a sus increíbles criaturas. Aquí tienes algunas formas divertidas y fáciles para ayudar:</p>
            <ul>
                <li><strong>¡Haz un dibujo!</strong> Dibuja a tu animal favorito de las Galápagos y compártelo con tus amigos para que ellos también aprendan sobre ellos.</li>
                <li><strong>Recoge basura</strong> cuando visites la playa. ¡Las tortugas y los peces te lo agradecerán!</li>
                <li><strong>Usa menos plástico.</strong> Cambia las botellas de plástico por botellas reutilizables para mantener los océanos limpios.</li>
                <li><strong>Infórmate y comparte.</strong> Aprende sobre los animales de Galápagos y cuéntales a tus amigos y familiares cómo pueden ayudar a protegerlos.</li>
            </ul>
            <p>¡Tú puedes ser un héroe para los animales de Galápagos! ¡Vamos a cuidar juntos de este maravilloso paraíso!</p>
        </section>

        <section class="section">
            <div class="title__section">
                <h2 class="animated-title">¡Descubre los Animales de las Islas Galápagos!</h2>
            </div>

            <div class="clasificacion">
                <div class="card__container">
                    <img src="../assets/img/galapagos1.png" alt="Tortuga Gigante de Galápagos">
                    <div class="card__content">
                        <h3 class="card__title">Tortuga Gigante de Galápagos</h3>
                        <p class="card__description">
                            Es un reptil. Con su caparazón duro y su cuello largo, la Tortuga Gigante de Galápagos es un animal tranquilo y amigable. ¡Ven y conoce a la Tortuga Gigante de Galápagos, la reina de las islas!
                        </p>
                        <small class="habitat"><strong>Hábitat:</strong> Zonas áridas y húmedas de las islas Galápagos.</small>
                    </div>
                </div>

                <div class="card__container">
                    <img src="../assets/img/galapagos5.png" alt="Pinzón">
                    <div class="card__content">
                        <h3 class="card__title">Pinzón de Darwin</h3>
                        <p class="card__description">
                            El Pinzón de Darwin es un ave pequeña y colorida que vive en las islas Galápagos. Con su pico afilado y su canto alegre, el Pinzón de Darwin es un animal curioso y juguetón. ¡Ven y descubre al Pinzón de Darwin, el pájaro de las islas!
                        </p>
                        <small class="habitat"><strong>Hábitat:</strong> Bosques secos hasta zonas húmedas</small>
                    </div>
                </div>

                <div class="card__container">
                    <img src="../assets/img/galapagos4.png" alt="León Marino">
                    <div class="card__content">
                        <h3 class="card__title">León Marino de Galápagos</h3>
                        <p class="card__description">
                            Es un mamífero marino que vive en las costas de las islas Galápagos. Con su pelaje suave y su nariz grande, el león marino de Galápagos es un animal juguetón y cariñoso.
                        </p>
                        <small class="habitat"><strong>Hábitat:</strong> Costas y playas de las islas Galápagos.</small>
                    </div>
                </div>

                <div class="card__container">
                    <img src="../assets/img/galapagos6.png" alt="Pingüino de Galápagos">
                    <div class="card__content">
                        <h3 class="card__title">Pingüino de Galápagos</h3>
                        <p class="card__description">
                            El pingüino de Galápagos es un ave marina que vive en las aguas frías de las islas Galápagos. Con sus plumas negras y blancas y su andar torpe, el pingüino de Galápagos es un nadador experto y un animal valiente. ¡Ven y descubre al pingüino de Galápagos, el rey de los mares!
                        </p>
                        <small class="habitat"><strong>Hábitat:</strong> Costas y aguas frías</small>
                    </div>
                </div>

                <div class="card__container">
                    <img src="../assets/img/galapagos7.png" alt="Cernícalo de Galápagos">
                    <div class="card__content">
                        <h3 class="card__title">Cernícalo de Galápagos</h3>
                        <p class="card__description">
                            El cernícalo de Galápagos es un ave rapaz que vive en las islas Galápagos. Con su plumaje oscuro y su vuelo rápido, el cernícalo de Galápagos es un cazador experto y un animal valiente. ¡Ven y descubre al cernícalo de Galápagos, el guardián de las islas!
                        </p>
                        <small class="habitat"><strong>Hábitat:</strong> Zonas áridas y manglares.</small>
                    </div>
                </div>

            </div>
        </section>

        <section class="videos">
            <div class="title__section">
                <h2 class="animated-title">¡Maravillas de las Islas Galápagos!</h2>
            </div>
            <div class="video__container">
                <div class="video">
                    <video src="../assets/video/video-isla1.mp4" title="YouTube video player" controls></video>
                </div>
                <div class="video">
                    <video src="../assets/video/video-isla2.mp4" title="YouTube video player" controls></video>
                </div>
                <div class="video">
                    <video src="../assets/video/video-isla3.mp4" title="YouTube video player" controls></video>
                </div>
            </div>
        </section>


        <?php require '../components/footer.php'; ?>
    </main>


    <script defer src="../js/index.js"></script>

</body>

</html>