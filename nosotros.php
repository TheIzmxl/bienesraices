<?php 

require 'includes/funciones.php';


incluirTemplates('header');
?>

    <section class="contenedor seccion">
        <h1>Conoce Sobre Nosotros</h1>
        <div class="nosotros-contenido">
            <div class="nosotros-imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="nosotros imagen">
                </picture>
            </div>
            <div class="nosotros-info">
                <h4>25 años de expereciencia</h4>
                <p>Maecenas commodo erat ac elit elementum, ac eleifend arcu gravida. Donec commodo auctor augue, eget
                    tempor dui fermentum in. Duis non enim vitae metus accumsan vehicula. Pellentesque egestas diam ut
                    ante aliquet, sit amet fringilla odio interdum. In nec odio nec turpis faucibus sagittis.Maecenas commodo erat ac elit elementum, ac eleifend arcu gravida. Donec commodo auctor augue, eget
                    tempor dui fermentum in. Duis non enim vitae metus accumsan vehicula.</p>

                    <p>Maecenas commodo erat ac elit elementum, ac eleifend arcu gravida. Donec commodo auctor augue, eget
                        tempor dui fermentum in. Duis non enim vitae metus accumsan vehicula. Pellentesque egestas diam ut
                        ante aliquet, sit amet fringilla odio interdum. In nec odio nec turpis faucibus sagittis.</p>
            </div>
        </div>
    </section>

    <main class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Maecenas commodo erat ac elit elementum, ac eleifend arcu gravida. Donec commodo auctor augue, eget
                    tempor dui fermentum in. Duis non enim vitae metus accumsan vehicula. Pellentesque egestas diam ut
                    ante aliquet, sit amet fringilla odio interdum. In nec odio nec turpis faucibus sagittis.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Maecenas commodo erat ac elit elementum, ac eleifend arcu gravida. Donec commodo auctor augue, eget
                    tempor dui fermentum in. Duis non enim vitae metus accumsan vehicula. Pellentesque egestas diam ut
                    ante aliquet, sit amet fringilla odio interdum. In nec odio nec turpis faucibus sagittis.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono tiempo" loading="lazy">
                <h3>A tiempo</h3>
                <p>Maecenas commodo erat ac elit elementum, ac eleifend arcu gravida. Donec commodo auctor augue, eget
                    tempor dui fermentum in. Duis non enim vitae metus accumsan vehicula. Pellentesque egestas diam ut
                    ante aliquet, sit amet fringilla odio interdum. In nec odio nec turpis faucibus sagittis.</p>
            </div>
        </div>
    </main>

    <?php incluirTemplates('footer');?>