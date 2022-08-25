<?php 

require 'includes/funciones.php';


incluirTemplates('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>
        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la Propiedad">
        </picture>
        <div class="resumen-propiedad">
            <p class="precio">$3.000.000</p>

            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono baño">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                    <p>4</p>
                </li>
            </ul>

            <p>Maecenas commodo erat ac elit elementum, ac eleifend arcu gravida. Donec commodo auctor augue, eget
                tempor dui fermentum in. Duis non enim vitae metus accumsan vehicula. Pellentesque egestas diam ut
                ante aliquet, sit amet fringilla odio interdum. In nec odio nec turpis faucibus sagittis.Maecenas
                commodo erat ac elit elementum, ac eleifend arcu gravida. Donec commodo auctor augue, eget
                tempor dui fermentum in. Duis non enim vitae metus accumsan vehicula.Maecenas commodo erat ac elit
                elementum, ac eleifend arcu gravida. Donec commodo auctor augue, eget
                tempor dui fermentum in. Duis non enim vitae metus accumsan vehicula. Pellentesque egestas diam ut
                ante aliquet, sit amet fringilla odio interdum.</p>

            <p>Maecenas commodo erat ac elit elementum, ac eleifend arcu gravida. Donec commodo auctor augue, eget
                tempor dui fermentum in. Duis non enim vitae metus accumsan vehicula. Pellentesque egestas diam ut
                ante aliquet, sit amet fringilla odio interdum. In nec odio nec turpis faucibus sagittis.Maecenas
                commodo erat ac elit elementum, ac eleifend arcu gravida. Donec commodo auctor augue, eget
                tempor dui fermentum in. Duis non enim vitae metus accumsan vehicula.</p>
        </div>
    </main>

    <?php incluirTemplates('footer');?>