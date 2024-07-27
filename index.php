<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>😉 ANIMALANDIA 😻</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./styles.css/banner.css">
</head>

<body>
    <main>
        <section class="bienvenida">
            <h1 class="bienvenida__titulo">
                <marquee class="bienvenida__marquee">¡BIENVENIDOS A MI SITIO WEB EXPLORADORES!🤠</marquee>
            </h1>
        </section>

        <header class="header">
            <div class="header__logo">
                <img class="header__logo-image" src="./assets/img/logo.avif" alt="Logo de la empresa">
            </div>
            <div class="header__title">
                <img class="header__title-gif" src="./assets/gifs/animalandia.gif" alt="titutlo web animalandia">
            </div>
            <div class="header__menu_container">
                <button class="header__menu-btn" id="menu-btn">
                    &#9776;
                </button>
            </div>
            <nav class="header__nav" id="nav-menu">
                <ul class="header__nav-list">
                    <li class="header__nav-item">
                        <a class="header__nav-link" href="#about">
                            <img class="header__nav-icon" src="./assets/icons/search.svg" alt="Icono de búsqueda">
                            Acerca de
                        </a>
                    </li>
                    <li class="header__nav-item header__nav-item-acerca">
                        <a class="header__nav-link" href="#about-author">
                            <img class="header__nav-icon" src="./assets/icons/telefono.svg" alt="Icono de contáctame">
                            contáctame
                        </a>
                    </li>
                    <li class="header__nav-item">
                        <a class="header__nav-link" href="./pages/game.php">
                            <img class="header__nav-icon" src="./assets/icons/game.svg" alt="Icono de juegos"> Juegos
                        </a>
                    </li>
                </ul>
            </nav>
        </header>

        <a id="usuario_name" class="Usuario__btn" href="./pages/registro.php"></a>

        <div class="hero">
            <div class="hero__image">
                <img class="hero__image-img" src="./assets/gifs/condor.gif" alt="Imagen de condor">
            </div>
            <div class="hero__content">
                <p class="hero__content-text">
                    ¡Bienvenidos a Animalandia, donde la aventura nunca termina! En este mágico rincón, descubrirás los
                    animales más increíbles de las cuatro regiones del Ecuador: la cálida costa, la majestuosa sierra,
                    la misteriosa Amazonía y las asombrosas islas Galápagos. Prepárate para un viaje lleno de colores,
                    sonidos y sorpresas mientras exploramos juntos las maravillas de nuestro país. ¿Estás listo para
                    conocer a los amigos peludos, emplumados y escamosos que habitan en cada rincón de Ecuador? ¡Vamos,
                    la diversión está a punto de comenzar!
                </p>
            </div>
        </div>

        <section class="submenu">
            <nav class="submenu__nav">
                <ul class="submenu__list">
                    <li class="submenu__item"><a class="submenu__link" href="./pages/costa.php"> 🐳 COSTA</a></li>
                    <li class="submenu__item"><a class="submenu__link" href="./pages/sierra.php"> 🦙 SIERRA</a></li>
                    <li class="submenu__item"><a class="submenu__link" href="./pages/oriente.php"> 🐸 ORIENTE</a></li>
                    <li class="submenu__item"><a class="submenu__link" href="./pages/galapagos.php"> 🐢 GALÁPAGOS</a>
                    </li>
                </ul>
            </nav>
        </section>
        <br>
        <h1 class="titulo__animales-vistos" style="text-align:center; margin-top:1rem;">LOS ANIMALES MAS VISTOS EN
            ECUADOR</h1>
        <section class="galeria">
            <div class="galeria__images">
                <div class="galeria__costa">
                    <img src="./assets/gifs/cangrejo.gif" alt="Imagen cangrejo" class="galeria__image" loading="lazy">
                    <span>Región Costa</span>
                    <img src="./assets/gifs/camaron.gif" alt="Imagen cuy" class="galeria__image" loading="lazy">
                    <span>Región Costa</span>
                    <img src="./assets/gifs/loros.gif" alt="Imagen mono" class="galeria__image" loading="lazy">
                    <span>Región Costa</span>
                </div>

                <div class="galeria__sierra">
                    <img src="./assets/gifs/cuy.gif" alt="Imagen mono" class="galeria__image" loading="lazy">
                    <span>Región Sierra</span>
                    <img src="./assets/gifs/llama.gif" alt="Imagen mono" class="galeria__image" loading="lazy">
                    <span>Región Sierra</span>

                    <img src="./assets/gifs/condor-volando.gif" alt="Imagen mono" class="galeria__image" loading="lazy">
                    <span>Región Sierra</span>
                </div>

                <div class="galeria__oriente">
                    <img src="./assets/gifs/cobra.gif" alt="Imagen mono" class="galeria__image" loading="lazy">
                    <span>Región Oriente</span>
                    <img src="./assets/gifs/jaguar.gif" alt="Imagen mono" class="galeria__image" loading="lazy">
                    <span>Región Oriente</span>
                    <img src="./assets/gifs/guacamayos.gif" alt="Imagen mono" class="galeria__image" loading="lazy">
                    <span>Región Oriente</span>
                </div>

                <div class="galeria__galapagos">
                    <img src="./assets/gifs/iguana.gif" alt="Imagen mono" class="galeria__image" loading="lazy">
                    <span>Región Galápagos</span>
                    <img src="./assets/gifs/lobo-marino.gif" alt="Imagen mono" class="galeria__image" loading="lazy">
                    <span>Región Galápagos</span>
                    <img src="./assets/gifs/tortuga.gif" alt="Imagen tortuga" class="galeria__image" loading="lazy">
                    <span>Región Galápagos</span>
                </div>
            </div>
            <aside class="galeria__aside">
                <h2 class="galeria__title">Síguenos en nuestras redes sociales</h2>
                <div class="redes__sociales">
                    <a href="https://www.facebook.com/animalandia.ec" class="redes__sociales-link">
                        <img src="./assets/icons/facebook.svg" alt="Icono de Facebook" class="redes__sociales-icon">
                    </a>
                    <a href="https://www.instagram.com/animalandia.ec/" class="redes__sociales-link">
                        <img src="./assets/icons/instagram.svg" alt="Icono de Instagram" class="redes__sociales-icon">
                    </a>
                    <a href="https://twitter.com/animalandia_ec" class="redes__sociales-link">
                        <img src="./assets/icons/twitter.svg" alt="Icono de Twitter" class="redes__sociales-icon">
                    </a>
                </div>
                <p class="galeria__text">ANIMALANDIA es una plataforma dedicada a explorar y aprender sobre la rica
                    biodiversidad de Ecuador. Nuestro objetivo es educar, inspirar y fomentar la conservación de la vida
                    silvestre y los ecosistemas naturales a través de contenido educativo, experiencias interactivas y
                    actividades de divulgación.</p>
                <video src="./assets/video/Regiòn COSTA Ecuador para niños.mp4" muted autoplay="true" class="video__aside"></video>
            </aside>
        </section>

        <section class="animales__extincion">
            <div class="animales__extincion-title">
                <h1 class="animales__extincion-title-text">ANIMALES EN PELIGRO DE EXTINCIÓN</h1>
            </div>
            <div class="animales__extincion-description">
                <img src="./assets/icons/danger.svg" alt="icon danger" class="icon__danger">
                <p class="animales__extincion-description-text">En Ecuador, existen muchas especies de animales que
                    están en peligro de extinción debido a la destrucción de sus hábitats, la caza furtiva y el cambio
                    climático. A continuación, te presentamos algunos de los animales más emblemáticos de nuestro país
                    que necesitan nuestra ayuda para sobrevivir. ¡Juntos podemos hacer la diferencia!</p>
            </div>
            <div class="container__extincion-animales">
                <div class="card">
                    <img src="./assets/gifs/condor-volando.gif" alt="Imagen mono" class="img" loading="lazy">
                    <div class="textBox">
                        <p class="text head">CONDOR ANDINO</p>
                        <span>PELIGRO DE EXTINCIÓN</span>
                    </div>
                </div>
                <div class="card">
                    <img src="./assets/gifs/oso.gif" alt="Imagen mono" class="img" loading="lazy">
                    <div class="textBox">
                        <p class="text head">Oso de Anteojos</p>
                        <span>PELIGRO DE EXTINCIÓN</span>
                    </div>
                </div>
                <div class="card">
                    <img src="./assets/gifs/aves.gif" alt="Imagen mono" class="img" style="width: 100%;" loading="lazy">
                    <div class="textBox">
                        <p class="text head">Guacamayos</p>
                        <span>PELIGRO DE EXTINCIÓN</span>
                    </div>
                </div>
                <div class="card">
                    <img src="./assets/gifs/toucan.gif" alt="Imagen mono" class="img" loading="lazy">
                    <div class="textBox">
                        <p class="text head">Tucán</p>
                        <span>PELIGRO DE EXTINCIÓN</span>
                    </div>
                </div>
                <div class="card">
                    <img src="./assets/gifs/aguila.gif" alt="Imagen mono" class="img" loading="lazy">
                    <div class="textBox">
                        <p class="text head">Águila harpía</p>
                        <span>PELIGRO DE EXTINCIÓN</span>
                    </div>
                </div>
                <div class="card">
                    <img src="./assets/gifs/tapir.gif" alt="Imagen mono" class="img" loading="lazy">
                    <div class="textBox">
                        <p class="text head">TAPIR</p>
                        <span>PELIGRO DE EXTINCIÓN</span>
                    </div>
                </div>
                <div class="card">
                    <img src="./assets/gifs/delfin.gif" alt="Imagen mono" class="img" loading="lazy">
                    <div class="textBox">
                        <p class="text head">DELFIN ROSADO</p>
                        <span>PELIGRO DE EXTINCIÓN</span>
                    </div>
                </div>
                <div class="card">
                    <img src="./assets/gifs/colibri.gif" alt="Imagen mono" class="img" loading="lazy">
                    <div class="textBox">
                        <p class="text head" style="text-align: center;">COLIBRO PICO DE ESPADA</p>
                        <span>PELIGRO DE EXTINCIÓN</span>
                    </div>
                </div>
            </div>
        </section>

        <?php require './components/banner.php'; ?>

        <section id="about" class="about">
            <div class="about__container">
                <div class="about__content">
                    <div class="about__text">
                        <h2 class="about__title">Sobre Animalandia</h2>
                        <p class="about__description">
                            ¡Bienvenido a Animalandia, tu puerta de entrada a la vibrante y diversa vida silvestre de
                            Ecuador! Ecuador es hogar de una increíble variedad de especies, desde la exuberante selva
                            amazónica hasta las majestuosas montañas de los Andes y las únicas Islas Galápagos.
                        </p>
                        <p class="about__description">
                            En Animalandia, nos apasiona mostrar la rica biodiversidad de Ecuador y promover los
                            esfuerzos de conservación. Nuestro objetivo es ofrecerte información fascinante sobre la
                            vida de los animales ecuatorianos y sus hábitats naturales.
                        </p>
                        <p class="about__description">
                            Únete a nosotros en un viaje por el corazón de la vida silvestre ecuatoriana, donde
                            encontrarás algunas de las criaturas más extraordinarias del planeta. Desde coloridos loros
                            y elusivos jaguares hasta juguetonas focas, Animalandia se dedica a celebrar y proteger a
                            estos asombrosos animales.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="about-author" class="about-author">
            <div class="about-author__container">
                <div class="about-author__content">
                    <div class="about-author__text">
                        <h2 class="about-author__title">Acerca del Autor</h2>
                        <p class="about-author__description">
                            Jeniffer Poaquiza es una apasionada de la naturaleza y la conservación. Estudiante creativa
                            y entusiasta, ha creado ANIMALANDIA para compartir su amor por los animales y promover la
                            conciencia ambiental.
                        </p>
                    </div>
                </div>

                <div class="about-author__contact">
                    <h3 class="about-author__contact-title">Contáctame</h3>
                    <form id="contact-form" class="about-author__form">
                        <input type="hidden" name="_captcha" value="false">
                        <div class="about-author__form-group">
                            <label for="name" class="about-author__form-label">Nombre</label>
                            <input type="text" id="name" name="name" class="about-author__form-input" placeholder="Ingrese su nombre..." pattern="[A-Za-zÀ-ÿ\s]{2,50}" title="El nombre debe contener solo letras y espacios. Debe tener entre 2 y 50 caracteres." required>
                        </div>
                        <div class="about-author__form-group">
                            <label for="email" class="about-author__form-label">Correo Electrónico</label>
                            <input type="email" id="email" name="email" class="about-author__form-input" placeholder="Ingrese su correo..." title="Ingrese una dirección de correo electrónico válida." required>
                        </div>
                        <div class="about-author__form-group">
                            <label for="message" class="about-author__form-label">Mensaje</label>
                            <textarea id="message" name="message" class="about-author__form-textarea" placeholder="Escriba su mensaje..." pattern=".{10,500}" title="El mensaje debe tener entre 10 y 500 caracteres." required></textarea>
                        </div>
                        <button type="submit" class="about-author__form-button">Enviar</button>
                    </form>

                    <div id="form-message"></div>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="footer__container">
                <p class="footer__text">Autor: <span class="footer__name">Jeniffer Poaquiza</span> | © <span id="current-year"></span></p>
            </div>
        </footer>

    </main>
</body>

<script src="./js/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>