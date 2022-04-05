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
            <span>Cristhian Dev es un sitio web cuyo principal objetivo es funcionar como carta de presentación de un desarrollador web. </span>Es mi sitio web personal, por lo tanto le he puesto mucho entusiasmo y dedicación, puedo decir que he disfrutado mucho del proceso y que estoy orgulloso del trabajo que he realizado.
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

        <p>Fui el director de diseño de todo el proyecto, desde el <span>diseño de imágenes con Photoshop</span>, el manejo de la paleta de colores, logotipo, tipografías, estilos y el flujo de trabajo de enlaces internos.
        </p>

        <p>Para la estructura y el maquetado del sitio usé <span>HTML5 y CSS3</span>, jugando entre un display <span> grid o flex</span>, dependiendo del diseño responsivo para cada dispositivo. El CSS fue codificado en <span>SASS</span>.</p>

        <p>Con <span>JavaScript</span> hice el efecto que tiene el menú en diferentes dispositivos. Todos los archivos CSS Y JS fueron compilados y mapeados con <span>Gulp</span>, las imágenes fueron comprimidas y convertidas a formatos .webp para desplegarlas en caso de que el navegador las soporte.</p>

        <p>Utilicé <span>PHP</span> para implementar templates de header (menú) y footer (pie de página) para tener más control de ellos en caso de algún cambio. También para colocar la fecha exacta en el footer</p>

        <p>Configure el archivo <span>.htaccess</span> para desplegar URLs amigables. Todo el proyecto fue desarrollado con un sistema de control de versiones a través de <span>Git y  GitHub.</span> </p>

        <p>Hice el deployment del proyecto y una auditoría del mismo con <span>Lighthouse</span> para evaluar <span>performance, Accessibility, Best Practices y SEO.
</span> Finalmente publiqué el proyecto en su respectivo hosting y dominio.</p>

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