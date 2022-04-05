<?php
 include './includes/funciones.php';

 incluirTemplate('header');
 ?>

<section class="display-flex-center contenedor-small ">
    <h1>Bienes raíces</h1>
</section>
<div class="wave ">
    <div style="height: 150px; overflow: hidden; "><svg viewBox="0 0 500 150 " preserveAspectRatio="none " style="height: 100%; width: 100%; ">
            <path d="M0.00,49.98 C150.00,150.00 351.74,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z " style="stroke: none; "></path>
        </svg></div>
</div>

<section class="sitio-web ">
    <div class="contenedor-small ">
        <h2>Desarrollo Back-end y Front-end</h2>
        <picture>
            <source srcset="../build/img/projects/bienesraices/0.webp " type="image/webp ">
            <img width="200 " height="300 " src="../build/img/projects/bienesraices/0.jpg " alt="Sitio web de Bienes raíces en una macBook ">
        </picture>
        <P>
            <span> Bienes raíces es un sitio web donde las personas encuentran anuncios de casas y departamentos de
                lujo en venta</span>, y al mismo tiempo tienen la oportunidad de pedir información para vender su casa a través del sitio o simplemente comprar una de ellas. Además también cuenta con un blog de artículos referentes
            al diseño de lugares dentro de casa y una sección de testimonios de personas que han visitado la página.
        </P>
        <div class="imagenes-grid ">
            <picture>
                <source srcset="../build/img/projects/bienesraices/0.1.webp " type="image/webp ">
                <img loading="lazy " width="200 " height="300 " src="../build/img/projects/bienesraices/0.1.jpg " alt="Sitio web de Bienes raíces en un iPhone ">
            </picture>
            <picture>
                <source srcset="../build/img/projects/bienesraices/0.2.webp " type="image/webp ">
                <img loading="lazy " width="200 " height="300 " src="../build/img/projects/bienesraices/0.2.jpg " alt="Sitio web de Bienes raíces en un iPhone ">
            </picture>
        </div>
        <P>
            <span>El administrador de la página</span> tiene el control de los anuncios que se muestran, puede crear, borrar o editar, siempre y cuando haya iniciado sesión como administrador.
        </P>
        <picture>
            <source srcset="../build/img/projects/bienesraices/a2.webp " type="image/webp ">
            <img loading="lazy " width="200 " height="300 " src="../build/img/projects/bienesraices/a2.jpg " alt="Pagina del administrador de Bienes raíces ">
        </picture>
        <h3>Mi papel</h3>

        <p>Me encargué de maquetar el diseño completo del proyecto haciendo uso de <span>HTML5, CSS3
                (Flexbox, Grid), SASS y JavaScript</span> para el menú de hamburguesa y modo oscuro de la aplicación, entre otras cosas. <span>Gulp</span> para compilar y mapear las hojas de estilos, los archivos de javascript, comprimir imágenes
            png/jpg y convertirlas a <span>webp</span>, para tener un buen perfomance, haciendo uso de dependencias (packaje.json).</p>

        <p>Por parte del <span></span>Back-End creé y normalice la base de datos <span>MySQL</span>, programé en
            <span>PHP 8</span> el CRUD de propiedades y vendedores, realicé la <span>autenticación de
                usuarios</span> de forma que las rutas (urls) que pertenecen al administrador estén protegidas por un inicio de sesión con <span>contraseñas
                hasheadas</span> en la base de datos, cada formulario esté validado según los requerimientos y protegido para evitar <span>inyección de código</span>.
        </p>

        <p>También programé y creé toda la estructura del modelo vista controlador (<span>MVC</span>), desde el routing, controladores, modelos y vistas. La parte de contacto es funcional gracias a PHPMailer y Mailtrap para el envío de emails.
        </p>

        <p>Antes de mandarlo a producción realicé las pruebas necesarias al proyecto a través de <span>pruebas escritas en Cypress</span>, comprobando que ciertos elementos existan dentro de una página y tenga cierto estilo, también comprobé todas las
            rutas del sitio web incluso las alertas, mensajes y errores que pudieran ocurrir en algún proceso.</p>

        <p>Una vez comprobado el sitio web, realicé el <span>deployment del proyecto</span> para mandarlo a producción, creé las variables de entorno para la base de datos. el archivo procfile y .htaccess. Finalmente publiqué el proyecto en <span>GitHub</span> y Heroku.
        </p>

        <p>Para entrar como administrador consulte usuario y contraseña </p>
        <a class="contacto-enlace " href="mailto:crissev17@gmail.com ">Pedir usuario y contraseña</a>


        <a class="contacto-enlace " target="_blank " href="https://shrouded-oasis-59999.herokuapp.com/login ">Entrar como administrador</a>

        <div class="alinear-botones contenedor ">
            <div class="boton-icono ">
                <a target="_blank " href="https://shrouded-oasis-59999.herokuapp.com/ " class="contenido_contacto boton ">Sitio web
                    <picture>
                        <source srcset="../build/img/icons/sitio-web.webp " type="image/webp ">
                        <img loading="lazy " width="200 " height="300 " src="../build/img/icons/sitio-web.png " alt="Icono-sitio-web ">
                    </picture>
                </a>
            </div>
            <div class="boton-icono ">
                <a href="https://github.com/CristhianSevilla/BienesRaices-Completo " target="_blank " class="contenido_contacto boton ">Ver código
                    <picture>
                        <source srcset="../build/img/icons/github-white.webp " type="image/webp ">
                        <img loading="lazy " width="200 " height="300 " src="../build/img/icons/github-white.png " alt="icono-github ">
                    </picture>
                </a>

            </div>
        </div>


        <p>Todo el sitio web por parte del cliente tiene un <span>diseño responsivo</span>.</p>
        <picture>
            <source srcset="../build/img/projects/bienesraices/responsive.webp " type="image/webp ">
            <img loading="lazy " width="200 " height="300 " src="../build/img/projects/bienesraices/responsive.jpg " alt="Sitio web de Bienes raíces en diferentes dispositivos ">
        </picture>
    </div>
</section>

<div class="wave-footer ">
    <div style="height: 150px; overflow: hidden; "><svg viewBox="0 0 500 150 " preserveAspectRatio="none " style="height: 100%; width: 100%; ">
            <path d="M0.00,49.98 C150.00,150.00 351.74,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z " style="stroke: none; "></path>
        </svg></div>
</div>

<?php incluirTemplate('footer'); ?>