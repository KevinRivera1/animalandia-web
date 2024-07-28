<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🐸 ORIENTE</title>
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
                <li><img src="../assets/img/oriente1.png" style="max-width: 100%;height: auto;border-radius:1rem;"></li>
                <li><img src="../assets/img/oriente2.png" style="max-width: 100%;height: auto;border-radius:1rem;"></li>
                <li><img src="../assets/img/oriente3.png" style="max-width: 100%;height: auto;border-radius:1rem;"></li>
                <li><img src="../assets/img/oriente4.png" style="max-width: 100%;height: auto;border-radius:1rem;"></li>
            </ul>

            <button type="button" class="slider-nav"></button>
            <button type="button" class="slider-nav slider-nav-next"></button>

            <div class="slider-indicators">
                <button class="active"></button>
                <button></button>
                <button></button>
            </div>
            <div class="hero-description">
                <h1>¡Descubre la Maravillosa Amazonía de Ecuador!</h1>
                <p>La Amazonía de Ecuador es un lugar mágico y lleno de vida. Con selvas densas, ríos serpenteantes y una increíble variedad de animales, la Amazonía es el hogar de aventuras sin fin. ¡Ven y explora la selva, donde siempre hay algo nuevo y emocionante por descubrir!</p>
            </div>
        </section>

        <section id="proteger-animales" class="prevencion">
            <h2>¡Protejamos a los Animales de la Amazonía!</h2>
            <p>La Amazonía ecuatoriana está llena de criaturas asombrosas que necesitan nuestra ayuda. Aquí tienes algunas formas divertidas y fáciles para protegerlas:</p>
            <ul>
                <li><strong>¡Crea un jardín de mariposas!</strong> Planta flores que atraigan mariposas y otros insectos para darles un hogar seguro.</li>
                <li><strong>Recoge basura</strong> cuando visites la selva o los ríos. ¡Los monos y las aves te lo agradecerán!</li>
                <li><strong>Usa menos plástico.</strong> Cambia las botellas de plástico por botellas reutilizables para mantener la selva limpia.</li>
                <li><strong>Infórmate y comparte.</strong> Aprende sobre los animales de la Amazonía y cuéntales a tus amigos y familiares cómo pueden ayudar a protegerlos.</li>
            </ul>
            <p>¡Tú puedes ser un héroe para los animales de la Amazonía! ¡Vamos a cuidar juntos de este maravilloso lugar!</p>
        </section>

        <section class="section">
            <div class="title__section">
                <h2 class="animated-title">¡Descubre los Animales de la Amazonía!</h2>
            </div>

            <div class="clasificacion">
                <div class="card__container">
                    <img src="../assets/img/oriente2.png" alt="Jaguar">
                    <div class="card__content">
                        <h3 class="card__title">Jaguar</h3>
                        <p class="card__description">
                            El Jaguar es el felino más grande de América y el tercero más grande del mundo. Vive en las selvas de la Amazonía y es un cazador sigiloso y poderoso. ¡Ven y descubre al jaguar, el rey de la selva!
                        </p>
                        <small class="habitat"><strong>Hábitat:</strong> Bosques tropicales y selvas húmedas.</small>
                    </div>
                </div>

                <div class="card__container">
                    <img src="../assets/img/oriente5.png" alt="Mono Chorongo">
                    <div class="card__content">
                        <h3 class="card__title">Mono Chorongo</h3>
                        <p class="card__description">
                            El mono chorongo es un primate que vive en las selvas de la Amazonía ecuatoriana. Con su cola larga y su pelaje oscuro, el mono chorongo es un animal curioso y juguetón. ¡Ven y conoce al mono chorongo, el acróbata de la selva!
                        </p>
                        <small class="habitat"><strong>Hábitat:</strong> Selvas tropicales y bosques primarios de la Amazonía.</small>
                    </div>
                </div>

                <div class="card__container">
                    <img src="../assets/img/oriente6.png" alt="Anaconda">
                    <div class="card__content">
                        <h3 class="card__title">Anaconda</h3>
                        <p class="card__description">
                            La anaconda es una serpiente gigante que vive en los ríos y lagos de la Amazonía ecuatoriana. Con su piel escamosa y su mandíbula poderosa, la anaconda es un animal temible y misterioso. ¡Ven y descubre a la anaconda, la reina de los ríos!
                        </p>
                        <small class="habitat"><strong>Hábitat:</strong> Ríos, lagos y pantanos de la selva amazónica.</small>
                    </div>
                </div>

                <div class="card__container">
                    <img src="../assets/img/oriente7.png" alt="Guacamayo Rojo">
                    <div class="card__content">
                        <h3 class="card__title">Guacamayo Rojo</h3>
                        <p class="card__description">
                            El guacamayo rojo es un ave colorida que vive en las selvas de la Amazonía ecuatoriana. Con su plumaje brillante y su pico fuerte, el guacamayo rojo es un animal alegre y ruidoso. ¡Ven y conoce al guacamayo rojo, el rey de la selva!
                        </p>
                        <small class="habitat"><strong>Hábitat:</strong> Selvas tropicales y áreas cercanas a ríos.</small>
                    </div>
                </div>

                <div class="card__container">
                    <img src="../assets/img/oriente8.png" alt="Rana flecha Nenenosa">
                    <div class="card__content">
                        <h3 class="card__title">Rana Flecha Venenosa</h3>
                        <p class="card__description">
                            La rana flecha venenosa es un anfibio colorido que vive en los bosques de la Amazonía ecuatoriana. Con su piel brillante y su veneno letal, la rana flecha venenosa es un animal fascinante y peligroso. ¡Ven y descubre a la rana flecha venenosa, la princesa de la selva!
                        </p>
                        <small class="habitat"><strong>Hábitat:</strong> Bosques húmedos tropicales.</small>
                    </div>
                </div>

            </div>
        </section>

        <section class="videos">
            <div class="title__section">
                <h2 class="animated-title">¡Explora el Oriente Ecuatoriano!</h2>
            </div>
            <div class="video__container">
                <div class="video">
                    <video src="../assets/video/video-oriente1.mp4" title="YouTube video player" controls></video>
                </div>
                <div class="video">
                    <video src="../assets/video/video-oriente2.mp4" title="YouTube video player" controls></video>
                </div>
                <div class="video">
                    <video src="../assets/video/video-oriente3.mp4" title="YouTube video player" controls></video>
                </div>
            </div>
        </section>

        <?php require '../components/footer.php'; ?>
    </main>

    <script defer src="../js/index.js"></script>

</body>

</html>