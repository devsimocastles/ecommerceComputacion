<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles Producto | <?php echo $datos_producto[0]->nombre ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>/Assets/styles.css">
</head>

<body class="productoBody">
    <?php
    $datos = $datos_producto[0];
    ?>

    <h1>Detalles Producto: <?= $datos->nombre ?></h1>

    <section class="producto">
        <div class="contenedorImagen">
            <img src="<?= $datos->ruta_imagen ?>" alt="" srcset="">
        </div>
        <div class="detallesProducto">
            <header>
                <h2><?= $datos->nombre ?></h2>
            </header>
            <div class="detalles">
                <ul>
                    <li><b>Descripción: </b><?=$datos->descripcion?></li>
                    <li><b>Código: </b><?=$datos->codigo?></li>
                    <li><b>Stock: </b><?=$datos->stock?></li>
                    <li><b>Precio: </b><?=$datos->precio?>$</li>
                </ul>
            </div>
        </div>
    </section>
</body>

</html>