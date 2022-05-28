<?php
include './includes/funciones.php';

incluirTemplate('header');
?>

<section class="display-flex-center contenedor-small ">
    <h1>Barberia Aplicación Web</h1>
</section>
<div class="wave">
    <div style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C150.00,150.00 351.74,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; "></path>
        </svg></div>
</div>

<section class="sitio-web ">
    <div class="contenedor-small ">
        <h2>Desarrollo Back-end y Front-end</h2>
        <picture>
            <source srcset="../build/img/projects/barberia/aplicacion-web.webp " type="image/webp ">
            <img width="200 " height="300 " src="../build/img/projects/barberia/aplicacion-web.jpg " alt="Aplicación web de la barberia en una macBook ">
        </picture>
        <P>
            <span> Barberia App es una aplicación web cliente/administrador donde los clientes pueden reservar citas creando una cuenta de usuario.
            </span>
        </P>
        <p>Para crear una cuenta la App pide datos y un correo electrónico que debe ser confirmado, para evitar bots o cuentas fantasma, si en algún momento el usuario olvida su contraseña puede restablecerla dentro de la App a través de un email.</p>
        <p>Para reservar una cita el usuario inicia sesión, selecciona los servicios que desea, ingresa los datos de la cita y confirma la cita; antes de reservar la cita  la App muestra un resumen con los datos de la cita, el usuario puede hacer cualquier modificación dentro del mismo panel de citas y los cambios se verán reflejados en tiempo real como en un carrito de compras.</p>
        <div class="imagenes-grid ">
            <picture>
                <source srcset="../build/img/projects/barberia/01-aplicacion-web.webp " type="image/webp ">
                <img loading="lazy " width="200 " height="300 " src="../build/img/projects/barberia/01-aplicacion-web.jpg " alt="Aplicación web de la barberia en un iPhone">
            </picture>
            <picture>
                <source srcset="../build/img/projects/barberia/02-aplicacion-web.webp " type="image/webp ">
                <img loading="lazy " width="200 " height="300 " src="../build/img/projects/barberia/02-aplicacion-web.jpg " alt="Aplicación web de la barberia en un iPhone">
            </picture>
        </div>
        <P>
            <span>El administrador de la Aplicación</span> tiene el control de los servicios que se muestran, puede crear, eliminar o editar un servicio; al iniciar sesión en la App se muestran todas las citas del día actual, pero también tiene la opción de buscar citas por fechas.
        </P>
        <picture>
            <source srcset="../build/img/projects/barberia/app-web.webp " type="image/webp ">
            <img loading="lazy " width="200 " height="300 " src="../build/img/projects/barberia/app-web.jpg " alt="Aplicacion web de la baberia, panel del administrador ">
        </picture>
        <h3>Mi papel</h3>

        <p>Me encargue del desarrollo de la Aplicación Web. Para el Front-End utilice las tecnologías <span>HTML5, CSS3 (Flexbox, Grid), SASS, JavaScript y Gulp. </span>  Todo el sitio web tiene un <span>diseño responsivo.</span></p>

        <p>Utilice <span>JavaScript</span> para crear el dinamismo de la Aplicación, el paginador de la sección del cliente, los botones que muestran u ocultan cada sección, también para seleccionar la fecha y formatearla, para mostrar algunas alertas y para el <span>consumo de la API con Fetch API y Async Await</span> (mostrar y seleccionar los servicios, mostrar el resumen de la cita y reservar la cita).</p>

        <p> <span>Gulp</span> para compilar y mapear las hojas de estilos, los archivos de javascript y comprimir imágenes png/jpg para convertirlas a <span>webp (para un buen perfomance)</span> haciendo uso de dependencias instaladas con npm en el package.json</p>

        <p>Del lado del <span>Back-End</span> creé las tablas, columnas y relaciones de la base de datos <span>MySQL</span>, y configuré las restricciones de integridad referencial de la misma.</p>

        <p>Con <span>PHP 8</span> programé la estructura del modelo vista controlador <span>(MVC),</span> desde el routing, controladores, modelos y vistas.</p>

        <p>Programé la creación de cuentas de usuarios con contraseñas hasheadas y envío de email para confirmar la cuenta con (<span>PHPMailer y Mailtrap</span>) a través de un token en la base de datos, y programé la sección para resetear la contraseña en caso de que el usuario la olvide.</p>

        <p><span>Creé La API para su consumo del lado del Front-End.</span> Programé el área de citas y reservaciones. También me encargue de la creación del área de administración, hice la unión de tablas con un <span>JOIN</span> para extraer la información necesaria y así mostrar los datos de cada cita.</p>

        <p>Finalmente programé una función para calcular el total a pagar de cada cita, programé el <span>CRUD</span> de los servicios, realicé la protección de páginas y autenticación de usuarios, de forma que las URLs que pertenecen al administrador o usuario están protegidas por un inicio de sesión. Cada formulario está validado según los requerimientos y protegido para <span> evitar inyección de código en la base de datos.</span></p>

        <p>Realicé las pruebas necesarias al proyecto a través de <span>Cypress</span>, comprobando que ciertos elementos existan dentro de una página y tengan los estilos requeridos, comprobé las
            rutas del sitio web incluso las alertas, mensajes y errores que pudieran ocurrir dentro de algún proceso.</p>

        <p>Realicé el <span>deployment del proyecto</span> para mandarlo a producción, creé las variables de entorno para la base de datos. el archivo procfile y .htaccess. Finalmente publiqué el proyecto en <span>GitHub</span> para subirlo a Heroku.
        </p>

        <p><span>Nota:</span>  Si desea ver cómo funciona la parte de confirmar cuenta o resetear la contraseña póngase en contacto conmigo para otorgarle acceso a la cuenta de MailTrap.</p>

        <p>Credenciales para entrar a la App como:</p>
        <p><span>Cliente:</span></p>

        <ul type="circle">
            <li>Email: cliente@cliente.com</li>
            <li>Password: 123456</li>
        </ul>

        <p><span>Administrador:</span></p>

        <ul type="circle">
            <li>Email: admin@appsalon.com</li>
            <li>Password: 12345678</li>
        </ul>

        <div class="alinear-botones contenedor ">
            <div class="boton-icono ">
                <a target="_blank" href="https://desolate-fortress-53145.herokuapp.com/" class="contenido_contacto boton ">Sitio web
                    <picture>
                        <source srcset="../build/img/icons/sitio-web.webp " type="image/webp ">
                        <img loading="lazy " width="200 " height="300 " src="../build/img/icons/sitio-web.png " alt="Icono-sitio-web ">
                    </picture>
                </a>
            </div>
            <div class="boton-icono ">
                <a href="https://github.com/CristhianSevilla/BienesRaices-Completo " target="_blank" class="contenido_contacto boton ">Ver código
                    <picture>
                        <source srcset="../build/img/icons/github-white.webp " type="image/webp ">
                        <img loading="lazy " width="200 " height="300 " src="../build/img/icons/github-white.png " alt="icono-github ">
                    </picture>
                </a>

            </div>
        </div>

        <picture>
            <source srcset="../build/img/projects/barberia/aplicacion-web-responsiva.webp " type="image/webp ">
            <img loading="lazy " width="200 " height="300 " src="../build/img/projects/barberia/aplicacion-web-responsiva.jpg " alt="Aplicación web de la barberia en diferentes dispositivos ">
        </picture>
    </div>
</section>

<div class="wave-footer">
    <div style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C150.00,150.00 351.74,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; "></path>
        </svg></div>
</div>

<?php incluirTemplate('footer'); ?>