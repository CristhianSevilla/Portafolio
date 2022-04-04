<?php
 include '../includes/funciones.php';

 incluirTemplate('header');
 ?>

<section class="display-flex-center contenedor-small">
    <h1>Cristhian Sevilla</h1>
</section>
<div class="wave">
    <div style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C150.00,150.00 351.74,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; "></path>
        </svg></div>
</div>

<section class="sitio-web">
    <div class="contenedor-small">
        <h2>Desarrollo Fullstack</h2>
        <picture>
            <source srcset="../build/img/projects/cristhian/0.webp" type="image/webp">
            <img width="200" height="300" src="../build/img/projects/cristhian/0.jpg" alt="Sitio web de CristhianDev en una MacBook">
        </picture>
        <P>
            <span>Cristhian Dev es un sitio web cuyo principal objetivo es funcionar como una carta de presentación de un desarrollador web. </span>Es mi sitio web personal, por lo tanto le he puesto mucho entusiasmo y dedicación, puedo decir que he disfrutado mucho del proceso y que estoy orgulloso del trabajo que he realizado.
        </P>

        <div class="imagenes-grid">
            <picture>
                <source srcset="../build/img/projects/cristhian/01.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="../build/img/projects/cristhian/01.jpg" alt="Sitio web de CristhianDev en un iPhone">
            </picture>
            <picture>
                <source srcset="../build/img/projects/cristhian/02.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="../build/img/projects/cristhian/02.jpg" alt="Sitio web de CristhianDev en un iPhone">
            </picture>
        </div>

        <h3>Mi papel</h3>

        <p>Me encargué de maquetar todo el diseño del proyecto haciendo uso de las tecnologías <span>HTML5 y CSS3</span>, para diferentes secciones fue necesario aplicar un display <span> grid o flex</span>, dependiendo del diseño responsivo para cada
            dispositivo.
        </p>

        <p>Para mejorar el <span>performance</span> del sitio usé <span>lazy Loading</span> en todas las imágenes para descargarlas solo cuando sean visibles, codifiqué el sitio web para que se muestren
            <span>imágenes en formato webp</span> en caso de ser soportadas por el navegador.
        </p>

        <p>También hice uso de <span>Prefetch</span> en el head, para cargar páginas que posiblemente el usuario visite después, y el <span> preload</span> para cargar primero fuentes y estilos. Puse <span>etiquetas meta</span> para la descripción del
            sitio web y tener un mejor SEO.

        </p>

        <p>Finalmente hice el <span>deployment </span>del proyecto y una <span>auditoría</span> del mismo con <span>Lighthouse</span> para evaluar <span>performance, Accessibility, Best Practices y SEO.</span></p>

        <div class="alinear-botones contenedor">
            <div class="boton-icono">
                <a target="_blank" href="https://cristhiansevilla.com/" class="contenido_contacto boton">Sitio web
                    <picture>
                        <source srcset="../build/img/icons/sitio-web.webp" type="image/webp">
                        <img loading="lazy" width="200" height="300" src="../build/img/icons/sitio-web.png" alt="icono">
                    </picture>
                </a>
            </div>
            <div class="boton-icono">
                <a target="_blank" href="https://github.com/CristhianSevilla/Portafolio" class="contenido_contacto boton">Ver código
                    <picture>
                        <source srcset="../build/img/icons/github-white.webp" type="image/webp">
                        <img loading="lazy" width="200" height="300" src="../build/img/icons/github-white.png" alt="icono">
                    </picture>
                </a>

            </div>
        </div>

        <picture>
            <source srcset="../build/img/projects/cristhian/responsive.webp" type="image/webp">
            <img loading="lazy" width="200" height="300" src="../build/img/projects/cristhian/responsive.jpg" alt="Sitio web de CristhianDev responsivo">
        </picture>
    </div>
</section>

<div class="wave-footer">
    <div style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C150.00,150.00 351.74,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none;"></path>
        </svg></div>
</div>

<?php incluirTemplate('footer'); ?>