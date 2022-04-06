<?php
 include './includes/funciones.php';

 incluirTemplate('header');
 ?>


<section class="display-flex-center contenedor-small ">
    <h1>Electronic Music Festival</h1>
</section>
<div class="wave">
        <div style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C150.00,150.00 351.74,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; "></path></svg></div>
    </div>

<section class="sitio-web ">
    <div class="contenedor-small ">
        <h2>Desarrollo Front-End</h2>
        <picture>
            <source srcset="../build/img/projects/emfest/0.webp " type="image/webp ">
            <img width="200 " height="300 " src="../build/img/projects/emfest/0.jpg " alt="Sitio web de EMFest en una MacBook ">
        </picture>
        <P>
            <span>Electronic Music Festival es una página que tiene la finalidad de brindar información acerca del evento.</span> La primera impresión al entrar a la página es transmitir a través de un video de fondo la emoción de vivir la experiencia
            de estar presente el día del evento.
        </P>
        <p>Es una sola página con diferentes secciones que contienen el LineUp con los DJ's que estarán presentándose, tiene una galería de fotos y una sección de información acerca de los boletos.
        </p>
        <div class="imagenes-grid ">
            <picture>
                <source srcset="../build/img/projects/emfest/01.webp " type="image/webp ">
                <img loading="lazy " width="200 " height="300 " src="../build/img/projects/emfest/01.jpg " alt="Sitio web de EMFstival en un iPhone ">
            </picture>
            <picture>
                <source srcset="../build/img/projects/emfest/02.webp " type="image/webp ">
                <img loading="lazy " width="200 " height="300 " src="../build/img/projects/emfest/02.jpg " alt="Sitio web de EMFstival en un iPhone ">
            </picture>
        </div>

        <h3>Mi papel</h3>

        <p>Fui el encargado de maquetar el diseño completo de la página, desde la estructura con <span>HTML5</span>, y los estilos con <span>CSS3 (flex y grid)</span>, codificado en <span>SASS.</span> La página es totalmente responsiva, es decir se
            adapta a diferentes dispositivos.
        </p>

        <p>Con <span>JavaScript</span> cargué las imágenes a la galería y agregué la funcionalidad de que al hacer clic sobre una imagen se vea en un tamaño más grande en una ventana modal con un overlay (sombra de fondo) y cuando el usuario haga clic
            o toque el overlay se cierre la ventana modal y se desbloquee el scroll del body.
        </p>

        <p>La barra de navegación lleva funciones de JavaScript para ocultarla y volver a mostrarla cuando el scroll haya llegado a un punto de la página, sin que exista un parpadeo por la sombra agregada para lograr el efecto flotante del menú.</p>

        <p>Cuando se hace clic sobre un ítem del menú se crea un efecto de scroll que lleva a una determinada sección de la página a través de un id del HTML, esto también lo hice aplicando JavaScript.</p>

        <p>Todo los archivos de CSS y JavaScript fueron compilados y mapeados con funciones escritas en el <span>gulpFile.js</span>. Las imágenes de la página están comprimidas y convertidas a formatos <span>.webp</span> y <span>.avif</span> en caso
            de que el navegador las soporte para tener un buen <span>performance.</span></p>

        <div class="alinear-botones contenedor ">
            <div class="boton-icono ">
                <a target="_blank " href="https://emfest.netlify.app/ " class="contenido_contacto boton ">Sitio web
                    <picture>
                        <source srcset="../build/img/icons/sitio-web.webp " type="image/webp ">
                        <img loading="lazy " width="200 " height="300 " src="../build/img/icons/sitio-web.png " alt="icono ">
                    </picture>
                </a>
            </div>
            <div class="boton-icono ">
                <a target="_blank " href="https://github.com/CristhianSevilla/EMFestival " class="contenido_contacto boton ">Ver código
                    <picture>
                        <source srcset="../build/img/icons/github-white.webp " type="image/webp ">
                        <img loading="lazy " width="200 " height="300 " src="../build/img/icons/github-white.png " alt="icono ">
                    </picture>
                </a>

            </div>
        </div>

        <picture>
            <source srcset="../build/img/projects/emfest/responsive.webp " type="image/webp ">
            <img loading="lazy " width="200 " height="300 " src="../build/img/projects/emfest/responsive.jpg " alt="Sitio web de EMFest responsivo ">
        </picture>
    </div>
</section>

<div class="wave-footer">
        <div style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C150.00,150.00 351.74,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; "></path></svg></div>
    </div>

<?php incluirTemplate('footer'); ?>