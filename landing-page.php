<?php
 include './includes/funciones.php';

 incluirTemplate('header');
 ?>


<section class="display-flex-center contenedor-small ">
    <h1>Landing Page, Agencia</h1>
</section>
<div class="wave ">
    <div style="height: 150px; overflow: hidden; "><svg viewBox="0 0 500 150 " preserveAspectRatio="none " style="height: 100%; width: 100%; ">
            <path d="M0.00,49.98 C150.00,150.00 351.74,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z " style="stroke: none; "></path>
        </svg></div>
</div>

<section class="sitio-web ">
    <div class="contenedor-small ">
        <h2>Desarrollo Front-End</h2>
        <picture>
            <source srcset="../build/img/projects/landingpage/0.webp " type="image/webp ">
            <img width="200 " height="300 " src="../build/img/projects/landingpage/0.jpg " alt="Sitio web de landingPage en una MacBook ">
        </picture>
        <P>
            <span>Landing Page para una consultoría de desarrollo web y marketing digital.</span> Es una página web cuyo objetivo es envolver y persuadir al cliente o persona que la visita para que contrate o compre algún servicio que se ofrece dentro
            de la misma página.
        </P>
        <div class="imagenes-grid ">
            <picture>
                <source srcset="../build/img/projects/landingpage/01.webp " type="image/webp ">
                <img loading="lazy " width="200 " height="300 " src="../build/img/projects/landingpage/01.jpg " alt="Sitio web de LandingPage en un iPhone ">
            </picture>
            <picture>
                <source srcset="../build/img/projects/landingpage/02.webp " type="image/webp ">
                <img loading="lazy " width="200 " height="300 " src="../build/img/projects/landingpage/02.jpg " alt="Sitio web de LandingPage en un iPhone ">
            </picture>
        </div>

        <h3>Mi papel</h3>

        <p>Diseñe y maquete cada sección de la página. Para el diseño usé<span> Photoshop</span> y para el maquetado <span>HTML5 y CSS3</span>, jugando entre un display <span>flex y grid</span>, para lograr una página totalmente adaptable a diferentes
            dispositivos. Para la animación de iconos, texto e imágenes usé <span>keyframes</span> dentro del CSS. Todo el CSS fue codificado en <span>SASS.</span>
        </p>

        <p>Con <span>Javascript</span> hice el efecto del menú de hamburguesa y desplegarlo dentro de un semicírculo para tener un menú bastante llamativo y amigable. También usé javascript para el modo oscuro de la página y finalmente para dar animación
            a iconos, imágenes y texto.
        </p>

        <p>Todos los archivos de SASS y javascript fueron mapeados y compilados a través de librerías de <span>Gulp</span>. Lo mismo para compilar <span> imágenes en formato webp y avif</span> en caso de ser soportadas por el navegador.
        </p>

        <div class="alinear-botones contenedor ">
            <div class="boton-icono ">
                <a href="https://landingpage-desarrollo.netlify.app/ " target="_blank " class="contenido_contacto boton ">Sitio web
                    <picture>
                        <source srcset="../build/img/icons/sitio-web.webp " type="image/webp ">
                        <img loading="lazy " width="200 " height="300 " src="../build/img/icons/sitio-web.png " alt="icono ">
                    </picture>
                </a>
            </div>
            <div class="boton-icono ">
                <a href="https://github.com/CristhianSevilla/landingPage " target="_blank " class="contenido_contacto boton ">Ver código
                    <picture>
                        <source srcset="../build/img/icons/github-white.webp " type="image/webp ">
                        <img loading="lazy " width="200 " height="300 " src="../build/img/icons/github-white.png " alt="icono ">
                    </picture>
                </a>

            </div>
        </div>

        <picture>
            <source srcset="../build/img/projects/landingpage/responsive.webp " type="image/webp ">
            <img loading="lazy " width="200 " height="300 " src="../build/img/projects/landingpage/responsive.jpg " alt="Sitio web de LandingPage responsivo ">
        </picture>
    </div>
</section>

<div class="wave-footer ">
    <div style="height: 150px; overflow: hidden; "><svg viewBox="0 0 500 150 " preserveAspectRatio="none " style="height: 100%; width: 100%; ">
            <path d="M0.00,49.98 C150.00,150.00 351.74,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z " style="stroke: none; "></path>
        </svg></div>
</div>

<?php incluirTemplate('footer'); ?>