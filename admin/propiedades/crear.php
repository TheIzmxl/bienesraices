<?php
//Base de datos
require '../../includes/config/database.php';
$db = conectarDB();

//Consultar para obtener los vendedores
$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);
//Areglo Validar Formulario
$errores = [];

//Asignar valores ya completos
$titulo = '';
    $precio = '';
    $descripcion = '';
    $habitaciones = '';
    $wc = '';
    $estacionamiento = '';
    $vendedorid = '';

//Ejecuta el codigo al enviar el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $titulo = mysqli_escape_string($db, $_POST['titulo']);
    $precio = mysqli_escape_string($db, $_POST['precio']);
    $descripcion = mysqli_escape_string($db, $_POST['descripcion']);
    $habitaciones = mysqli_escape_string($db, $_POST['habitaciones']);
    $wc = mysqli_escape_string($db, $_POST['wc']);
    $estacionamiento = mysqli_escape_string($db, $_POST['estacionamiento']);
    $vendedorid = mysqli_escape_string($db, $_POST['vendedor']);
    $creado = date('Y/m/d');
    //Asignar files a una variable
    $imagen = $_FILES['imagen'];


    if (!$titulo) {
        $errores[] = "Debes añadir un titulo";
    }

    if (!$precio) {
        $errores[] = "El Precio es obligatorio";
    }
    if (strlen($descripcion) < 50) {
        $errores[] = "La descripción es obligatoria y debe tener minimo 50 caracteres";
    }
    if (!$habitaciones) {
        $errores[] = "Insertar número de habitaciones";
    }
    if (!$wc) {
        $errores[] = "Insertar número de baños";
    }
    if (!$estacionamiento) {
        $errores[] = "Insertar número de lugares de estacionamiento";
    }
    if (!$vendedorid) {
        $errores[] = "Elija un Vendedor";
    }
    if(!$imagen['name']) {
        $errores[] = "Hace falta una imagen";
    }

    //validar tamaño 
    $medida = 1000 * 1000;
    if($imagen['size'] > $medida) {
        $errorer[] = 'La imagen es muy pesada';
    }
    // echo "<pre>";
    // var_dump($errores);
    // echo "</pre>";

    //Revisar que el arreglo de errores este vacio

    if (empty($errores)) {

         /** SUBIDA DE ARCHIVOS */
        //Crear una carpeta
        $carpetaImagenes = '../../imagenes/';
        if(!is_dir($carpetaImagenes)){
            mkdir($carpetaImagenes);
        }
        //Generar nombre unico
        $nombreImagen = md5( uniqid( rand(), true));

        //Subir imagen 

        move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen . ".jpg" );

        //insertar en la base de datos
        $query = " INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, wc,
    estacionamiento, creado, vendedorid) VALUES ( '$titulo', '$precio','$nombreImagen', '$descripcion', '$habitaciones',
     '$wc', '$estacionamiento','$creado', '$vendedorid' )";

        //   echo $query;

        //Almacenar
        $resultado = mysqli_query($db, $query);

        if ($db) {
            if ($db->query($query)) {
                $msg = "filas insertadas: " . $db->affected_rows;
                header('Location: /admin');
            } else {
                $msg = "Hubo un error: " . $db->error;
            }
        } else {
            $msg = "No hay conexión. Revisa tus credenciales";
        }
        //   echo $msg;
    }
}

require '../../includes/funciones.php';


incluirTemplates('header');
?>

<main class="contenedor seccion">
    <h1>Crear</h1>

    <a href="../index.php" class="boton boton-verde">Volver</a>

    <?php foreach($errores as $error): ?>
        <div class="alerta error">
        <?php echo $error ?>
        </div>
    <?php endforeach ?>
    <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
        <fieldset>
            <legend>Información General</legend>
            <label for="titulo">Titulo:</label>
            <input 
            type="text" 
            id="titulo" 
            name="titulo" 
            value="<?php echo $titulo ?>" 
            placeholder="Titulo Propiedad">

            <label for="precio">Precio:</label>
            <input 
            type="number" 
            id="precio" 
            name="precio" 
            value="<?php echo $precio ?>" 
            placeholder="Precio de la Propiedad">

            <label for="imagen">Imagen:</label>
            <input 
            type="file" 
            id="imagen" 
            accept="image/jpeg, image/png" 
            name="imagen">

            <label for="descripcion">Descripcion</label>
            <textarea 
            id="descripcion" 
            name="descripcion" 
            cols="30" 
            rows="10"><?php echo $descripcion ?></textarea>
        </fieldset>

        <fieldset>
            <legend>Información propiedad</legend>
            <label for="habitaciones">Habitaciones:</label>
            <input 
            type="number" 
            id="habitaciones" 
            name="habitaciones" 
            value="<?php echo $habitaciones ?>" 
            placeholder="Ej: 3" 
            min="1" 
            max="9">

            <label for="wc">Baños:</label>
            <input 
            type="number" 
            id="wc" name="wc" 
            value="<?php echo $wc ?>" 
            placeholder="Ej: 3" 
            min="1" 
            max="9">

            <label for="estacionamiento">Estacionamiento:</label>
            <input 
            type="number" 
            id="estacionamiento" 
            name="estacionamiento" 
            value="<?php echo $estacionamiento ?>" 
            placeholder="Ej: 3" 
            min="1" 
            max="9">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>
            <select name="vendedor">
                <option value="">--Seleccione un Vendedor</option>
                <?php while($vendedor = mysqli_fetch_assoc($resultado)) : ?>
                    <option <?php echo $vendedorid === $vendedor['id'] ? 'selected' : ''; ?>  value="<?php echo $vendedor['id'] ?>"> <?php echo $vendedor['nombre'] . " " . $vendedor['apellido'] ?> </option>
                    <?php endwhile ?>
            </select>
        </fieldset>
        <input 
        type="submit" 
        class="boton-formulario boton-verde" 
        value="Crear propiedad">
    </form>
</main>

<?php incluirTemplates('footer'); ?>