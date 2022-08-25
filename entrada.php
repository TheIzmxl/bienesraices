<?php 

require 'includes/funciones.php';


incluirTemplates('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guia para la decoración de tu hogar</h1>
        
        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen de la Propiedad">
        </picture>
        <p class="informacion-meta">Escrito el: <span>23/08/2022</span> por: <span>Admin</span></p>
        <div class="resumen-propiedad">
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