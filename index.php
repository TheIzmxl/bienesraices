<?php 

require 'includes/funciones.php';

;
incluirTemplates('header', $inicio = true);
?>

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
    <section class="contenedor seccion">
        <h2>Casas y Deptos en Venta</h2>
        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">

                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa de Lago de Lujo</h3>
                    <p>Casa en el Lago con excelente vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">$3,000,000</p>

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
                    <a href="anuncio.php" class="boton-amarillo-block">
                        Ver Propiedad
                    </a>
                </div>
                <!--.Contenido anuncio-->
            </div>
            <!--.Anuncio-->
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio2.webp" type="image/webp">
                    <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio1.2pg" alt="anuncio">

                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa Terminados de Lujo</h3>
                    <p>Casa en el Lago con excelente vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">$3,000,000</p>

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
                    <a href="anuncio.php" class="boton-amarillo-block">
                        Ver Propiedad
                    </a>
                </div>
                <!--.Contenido anuncio-->
            </div>
            <!--.Anuncio-->
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio3.webp" type="image/webp">
                    <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio3.jpg" alt="anuncio">

                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa con Piscina</h3>
                    <p>Casa en el Lago con excelente vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">$3,000,000</p>

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
                    <a href="anuncio.php" class="boton-amarillo-block">
                        Ver Propiedad
                    </a>
                </div>
                <!--.Contenido anuncio-->
            </div>
            <!--.Anuncio-->



        </div>
        <!--.Contenedor Anuncios-->

        <div class="ver-todas alinear-derecha">
            <a href="" class="boton-verde">Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p class="centrar-texto">Llena el formulario y un asesor se pondrá en contacto contigo</p>
        <a href="contacto.php" class="boton-amarillo">Contactános</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="entrada-blog">
                <div>
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="texto entrada blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>23/08/2022</span> por: <span>Admin</span></p>
                        <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y
                            ahorrando dinero</p>
                    </a>
                </div>
            </article>
            <article class="entrada-blog">
                <div>
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="texto entrada blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guía para la decoración de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>26/08/2022</span> por: <span>Admin</span></p>
                        <p>Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para
                            darle vida a tu espacio</p>
                    </a>
                </div>
            </article>
        </section>
        <section class="testimoniales">
            <h3>Testimoniales</h3>

            <div class="testimonial">
                <blockquote>
                    El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron
                    cumple con todas mis expectativas
                </blockquote>
                <p>--Ismael Barreto</p>
            </div>
        </section>
    </div>

    <?php incluirTemplates('footer');?>