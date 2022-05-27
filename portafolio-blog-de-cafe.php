<?php
 include './includes/funciones.php';

 incluirTemplate('header');
 ?>

<section class="display-flex-center contenedor-small ">
    <h1>Blog de café</h1>
</section>
<div class="wave">
        <div style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C150.00,150.00 351.74,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; "></path></svg></div>
    </div>

<section class="sitio-web ">
    <div class="contenedor-small ">
        <h2>Desarrollo Front-End</h2>
        <picture>
            <source srcset="../build/img/projects/blogcafe/pagina-web.webp " type="image/webp ">
            <img width="200 " height="300 " src="../build/img/projects/blogcafe/pagina-web.jpg " alt="Sitio web de Block de café en una MacBook ">
        </picture>
        <P>
            <span> Blog de Café es un sitio web donde las personas pueden encontrar todo acerca del mundo del café</span> y envolverse entre los colores hasta llegar a sentir el aroma del café e incluso saborearlo.
        </P>
        <p>Dentro del sitio web existen diferentes secciones desde cursos, talleres, historias y deliciosas recetas para aprender de la mano de los expertos, también tiene una sección de contacto con un formulario sencillo pero atractivo.
        </p>
        <div class="imagenes-grid ">
            <picture>
                <source srcset="../build/img/projects/blogcafe/02-pagina-web.webp " type="image/webp ">
                <img loading="lazy " width="200 " height="300 " src="../build/img/projects/blogcafe/02-pagina-web.jpg " alt="Sitio web de Blog de café en un iPhone ">
            </picture>
            <picture>
                <source srcset="../build/img/projects/blogcafe/03-pagina-web.webp " type="image/webp ">
                <img loading="lazy " width="200 " height="300 " src="../build/img/projects/blogcafe/03-pagina-web.jpg " alt="Sitio web de Blog de café en un iPhone ">
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

        <div class="alinear-botones contenedor ">
            <div class="boton-icono ">
                <a href="https://mi-blog-de-cafe.netlify.app/ " target="_blank " class="contenido_contacto boton ">Sitio web
                    <picture>
                        <source srcset="../build/img/icons/sitio-web.webp " type="image/webp ">
                        <img loading="lazy " width="200 " height="300 " src="../build/img/icons/sitio-web.png " alt="icono ">
                    </picture>
                </a>
            </div>
            <div class="boton-icono ">
                <a href="https://github.com/CristhianSevilla/BlogDeCafe " target="_blank " class="contenido_contacto boton ">Ver código
                    <picture>
                        <source srcset="../build/img/icons/github-white.webp " type="image/webp ">
                        <img loading="lazy " width="200 " height="300 " src="../build/img/icons/github-white.png " alt="icono ">
                    </picture>
                </a>

            </div>
        </div>

        <picture>
            <source srcset="../build/img/projects/blogcafe/pagina-web-responsiva.webp " type="image/webp ">
            <img loading="lazy " width="200 " height="300 " src="../build/img/projects/blogcafe/pagina-web-responsiva.jpg " alt="Sitio web de Blog De Café responsivo ">
        </picture>
    </div>
</section>

<div class="wave-footer">
        <div style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C150.00,150.00 351.74,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; "></path></svg></div>
    </div>

<?php incluirTemplate('footer'); ?>