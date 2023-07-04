<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Computación</title>
    <link rel="stylesheet" href="<?= base_url(); ?>\Assets\styles.css">
</head>
<!-- 
    Requisitos de finalización
Apertura: Friday, 14 de July de 2023, 23:59
Cierre: Friday, 21 de July de 2023, 23:59

Consigna:

Utilizando codeigniter, realizar el desarrollo del siguiente sitio web

Agregar:

Home
Mostrar un listado de productos cuya información se lea de la base de datos
Pagina detalle del producto
Mostrar los datos mas destacados del producto
Nombre
Precio
Stock
Codigo
Formato de entrega:

Enviar un archivo .rar o .zip con el siguiente formato: apellido_modulo1.rar

Dentro del .rar o .zip se debe enviar el/los archivos php y un archivo en el cual se encuentre el dump de base de datos (sentencias para la creación de tablas necesarias)
 -->
<body>
    <h1 class="titulo">E-commerce computación</h1>
    <section class="listaProducto">
        <header>
            <h2>Lista de Productos</h2>
        </header>
        <div class="contenedor">
            <?php foreach ($productos as $producto) {?>
                <article class="productoCard">
                    <h3 class="productoTitulo"><?php echo $producto->nombre ?></h3>
                    <span class="precio"><?php echo $producto->precio?>$</span>
                    <img src="<?php echo $producto->ruta_imagen ?>" alt="">
                    <a href="#">Detalles del producto</a>
                </article>
            <?php } ?>
        </div>
    </section>
</body>
</html>