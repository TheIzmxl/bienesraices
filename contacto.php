<?php 

require 'includes/funciones.php';


incluirTemplates('header');
?>
    
    <main class="contenedor seccion">
        <h1>Contacto</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen Contacto">
        </picture>

        <h2>Llene el formulario de Contacto</h2>

        <form class="formulario">
            <fieldset>
                <legend>Información Personal</legend>
                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu Nombre" id="nombre">
                
                <label for="email">E-mail</label>
                <input type="email" placeholder="Tu Email" id="email">

                <label for="telefono">Teléfono</label>
                <input type="tel" placeholder="Tu teléfono" id="telefono">

                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" cols="30" rows="10" placeholder="Tu Mensaje"></textarea>
            </fieldset>
            
            <fieldset>
                <legend>Información sobre la propiedad</legend>
                <label for="opciones">Vender o Comprar</label>
                <select name="" id="opciones">
                    <option value="" disabled selected>--Seleccionar</option>
                    <option value="Comprar">Comprar</option>
                    <option value="Vender">Vender</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto</label>
                <input type="number" placeholder="Tu Precio o Presupuesto" id="presupuesto">
            </fieldset>

            <fieldset>
                <legend for="">Información de Contacto</legend>
                <p>Seleccione como desea ser contactado</p>
                
                <div class="forma-contacto">
                    <label for="contacto-telefono">Teléfono</label>
                    <input name="contacto" type="radio" value="telefono" id="contacto-telefono">
                    
                    <label for="contacto-email">E-mail</label>
                    <input name="contacto" type="radio" value="email" id="contacto-email">
                </div>

                <p>Si eligió teléfono, elija la fecha y hora para ser contactado</p>

                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha">

                <label for="hora">Hora:</label>
                <input type="time" id="hora" min="09:00" max="18:00">
            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">
        </form>
    </main>

    <?php incluirTemplates('footer');?>