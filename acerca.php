<?php include 'includes/templates/header.php'; ?>

<main>
    <section class="encabezado contenedor">
        <div>
            <h1>desarrollador web</h1>
            <p>Me gusta diseñar, maquetar y programar páginas web</p>
        </div>
    </section>

    <div class="contenedor-imagen">
        <picture>
            <source srcset="./build/img/Portada.webp" type="image/webp">
            <img width="100" height="100" src="./build/img/Portada.jpg" alt="Cristhian Sevilla">
        </picture>
    </div>
</main>

<section class="descripcion contenedor-small">
    <h2>Sobre mí</h2>

    <p>
        Hola, soy Cristhian Sevilla. Soy una persona proactiva con gran facilidad para la resolución de problemas, me considero capaz de mejorar y aprender de cada una de las oportunidades que se me presenten.
    </p>
    <p>
        Me gusta seguir aprendiendo y desafiarme, haciendo cosas interesantes. Soy un espíritu apasionado, expresivo y entusiasta de la música, las series, los libros y más.
    </p>
    <p>
        También soy desarrollador Front-End y Back-End, amo plasmar cada una de las ideas, colores y emociones que surgen de la inspiración de un proyecto.
    </p>
</section>

<section class="habilidades contenedor-small">
    <div class="aptitudes">
        <h3>Aptitudes</h3>
        <ul type="circle">
            <li>Gestión de autoaprendizaje</li>
            <li>Buena predisposición para trabajar en equipo</li>
            <li>Imaginación, creatividad y gusto por la estética visual</li>
            <li>Profesionalidad y responsabilidad</li>
        </ul>
    </div>
    <div class="conocimientos">
        <h3>Conocimientos</h3>
        <ul type="circle">
            <li>HTML5, CSS3, SASS (SCSS)</li>
            <li>JavaScript ES6, Gulp</li>
            <li>PHP8, Java</li>
            <li>Fetch API</li>
            <li>Programación Orientada a Objetos</li>
            <li>MVC, API</li>
            <li>Oracle, MySQL</li>
            <li>Git, GitHub</li>
        </ul>
    </div>
</section>


<?php include 'includes/templates/footer.php'; ?>