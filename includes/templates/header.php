<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>
    <header class="header <?php echo $inicio ? 'inicio' : '' ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/" >
                    <img src="/build/img/logo.svg" alt="logotipo" class="logo">
                </a>

                <div class="mobile-menu">
                    <img loading="lazy" src="/build/img/barras.svg" alt="menu navegacion">
                </div>
                <div class="derecha">
                    <img loading="lazy" src="/build/img/dark-mode.svg" alt="boton darkmode" class="dark-mode-boton">
                    
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blogs</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>
                </div>
            </div> <!--.Cierre de la Barra-->
            
        </div>
    </header>