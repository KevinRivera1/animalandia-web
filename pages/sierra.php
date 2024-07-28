<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🦙 SIERRA</title>
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
                <li><img src="../assets/img/eslider1.png" style="max-width: 100%;height: auto;border-radius:1rem;"></li>
                <li><img src="../assets/img/eslider2.png" style="max-width: 100%;height: auto;border-radius:1rem;"></li>
                <li><img src="../assets/img/eslider3.png" style="max-width: 100%;height: auto;border-radius:1rem;"></li>
                <li><img src="../assets/img/eslider4.png" style="max-width: 100%;height: auto;border-radius:1rem;"></li>
            </ul>

            <button type="button" class="slider-nav"></button>
            <button type="button" class="slider-nav slider-nav-next"></button>

            <div class="slider-indicators">
                <button class="active"></button>
                <button></button>
                <button></button>
            </div>
            <div class="hero-description">
                <h1>¡Explora la Increíble Sierra de Ecuador!</h1>
                <p>La sierra de Ecuador es un lugar lleno de montañas majestuosas, valles verdes y animales fascinantes. Con volcanes imponentes y culturas ricas, la sierra es perfecta para los aventureros jóvenes. ¡Ven y descubre la emoción de la sierra ecuatoriana, donde siempre hay algo nuevo y maravilloso por ver!</p>
            </div>
        </section>

        <section id="proteger-animales" class="prevencion">
            <h2>¡Cuidemos a los Animales de la Sierra!</h2>
            <p>La sierra ecuatoriana es hogar de muchos animales increíbles que necesitan nuestra ayuda. Aquí tienes algunas maneras divertidas y fáciles de protegerlos:</p>
            <ul>
                <li><strong>¡Haz un dibujo!</strong> Dibuja a tu animal favorito de la sierra y compártelo con tus amigos para que ellos también aprendan sobre ellos.</li>
                <li><strong>Recoge basura</strong> cuando visites las montañas o los parques. ¡Los cóndores y las llamas te lo agradecerán!</li>
                <li><strong>Usa menos plástico.</strong> Cambia las botellas de plástico por botellas reutilizables para mantener las montañas limpias.</li>
                <li><strong>Infórmate y comparte.</strong> Aprende sobre los animales de la sierra y cuéntales a tus amigos y familiares cómo pueden ayudar a protegerlos.</li>
            </ul>
            <p>¡Tú puedes ser un héroe para los animales de la sierra ecuatoriana! ¡Vamos a cuidar juntos de este maravilloso lugar!</p>
        </section>

        <section class="section">
            <div class="title__section">
                <h2 class="animated-title">¡Descubre los Animales de la Sierra!</h2>
            </div>

            <div class="clasificacion">
                <div class="card__container">
                    <img src="../assets/img/eslider1.png" alt="condor andino">
                    <div class="card__content">
                        <h3 class="card__title">Cóndor Andino</h3>
                        <p class="card__description">El cóndor andino es una de las aves más grandes y majestuosas de la sierra ecuatoriana. Con una envergadura de hasta 3 metros, el cóndor es un símbolo de libertad y fuerza. ¡Ven y descubre al rey de los Andes!</p>
                        <small class="habitat"><strong>Hábitat:</strong> Zonas montañosas y páramos andinos.</small>
                    </div>
                </div>

                <div class="card__container">
                    <img src="../assets/img/eslider6.png" alt="curiquingue">
                    <div class="card__content">
                        <h3 class="card__title">Curiquingue</h3>
                        <p class="card__description">El curiquingue es un ave inteligente y sociable que vive en las montañas de la sierra ecuatoriana. Con su pluma negra y su pico amarillo, el curiquingue es un animal curioso y valiente. ¡Ven y conoce al curiquingue, el guardián de los Andes!</p>
                        <small class="habitat"><strong>Hábitat:</strong> Páramos y áreas rocosas de la Sierra</small>
                    </div>
                </div>

                <div class="card__container">
                    <img src="../assets/img/eslider4.png" alt="llama">
                    <div class="card__content">
                        <h3 class="card__title">Llama</h3>
                        <p class="card__description">La llama es un animal doméstico muy importante en la sierra ecuatoriana. Con su lana suave y su carácter amigable, la llama es una compañera fiel para los pastores de los Andes. ¡Ven y conoce a la llama, la reina de las montañas!</p>
                        <small class="habitat"><strong>Hábitat:</strong> Altiplano andino, especialmente en los páramos y montañas de los Andes.</small>
                    </div>
                </div>

                <div class="card__container">
                    <img src="../assets/img/eslider3.png" alt="oso de anteojos">
                    <div class="card__content">
                        <h3 class="card__title">Oso de Anteojos</h3>
                        <p class="card__description">El oso de anteojos es el único oso de Sudamérica y habita en los bosques nublados de la sierra ecuatoriana. Con su pelaje oscuro y sus marcas blancas en el rostro, el oso de anteojos es un animal misterioso y fascinante. ¡Ven y descubre al oso de anteojos, el guardián de los bosques andinos!</p>
                        <small class="habitat"><strong>Hábitat:</strong> Páramos y bosques altos.</small>
                    </div>
                </div>

                <div class="card__container">
                    <img src="../assets/img/eslider5.png" alt="conejo andino">
                    <div class="card__content">
                        <h3 class="card__title">Conejo Andino</h3>
                        <p class="card__description">El conejo andino es un pequeño mamífero que vive en las montañas de la sierra ecuatoriana. Con su pelaje suave y sus orejas largas, el conejo andino es un animal ágil y curioso. ¡Ven y conoce al conejo andino, el saltarín de los Andes!</p>
                        <small class="habitat"><strong>Hábitat:</strong> Bosques montanos y páramos</small>
                    </div>
                </div>

            </div>
        </section>

        <section class="videos">
            <div class="title__section">
                <h2 class="animated-title">¡Aventuras en la Sierra Ecuatoriana!</h2>
            </div>
            <div class="video__container">
                <div class="video">
                    <video src="../assets/video/video-sierra.mp4" title="YouTube video player" controls></video>
                </div>
                <div class="video">
                    <video src="../assets/video/video-sierra2.mp4" title="YouTube video player" controls></video>
                </div>
                <div class="video">
                    <video src="../assets/video/video-sierra3.mp4" title="YouTube video player" controls></video>
                </div>
            </div>
        </section>

        <?php require '../components/footer.php'; ?>
    </main>

    <script defer src="../js/index.js"></script>
</body>

</html>