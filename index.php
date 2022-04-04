<?php include 'templates/header.php'; ?>

<section class="header-inferior contenedor ">
    <div class="header-texto ">
        <h1>¡Hola! soy<span> Cristhian</span></h1>
    </div>
</section>
<div class="wave ">
    <div style="height: 150px; overflow: hidden; "><svg viewBox="0 0 500 150 " preserveAspectRatio="none " style="height: 100%; width: 100%; ">
            <path d="M0.00,49.98 C150.00,150.00 351.74,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z " style="stroke: none; "></path>
        </svg></div>
</div>

<main class="presentacion ">
    <div class="contenedor presentacion-contenido ">
        <div>
            <h2>Soy <span>desarrollador web</span></h2>
            <p><span>Me gusta diseñar, maquetar y programar páginas web</span>, amo plasmar cada una de las ideas, colores y emociones que surgen de la inspiración de...</p>
            <div class="alinear-derecha contenedor ">
                <a href="/acerca" class="contenido_contacto boton ">Leer más</a>
            </div>
        </div>
        <div class="presentacion-imagen ">
            <picture>
                <source srcset="./build/img/developer.webp " type="image/webp ">
                <img loading="lazy " width="200 " height="300 " src="./build/img/developer.png " alt="desarrollador Web ">
            </picture>
        </div>
    </div>
</main>

<div class="wave-footer ">
    <div style="height: 150px; overflow: hidden; "><svg viewBox="0 0 500 150 " preserveAspectRatio="none " style="height: 100%; width: 100%; ">
            <path d="M0.00,49.98 C150.00,150.00 351.74,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z " style="stroke: none; "></path>
        </svg></div>
</div>

<?php include 'templates/footer.php'; ?>