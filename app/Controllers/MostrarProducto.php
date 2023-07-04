<?php
namespace App\Controllers;

class MostrarProducto extends BaseController
{
    public function mostrar($producto_id){
        $db = \Config\Database::connect();
        $query= $db->query("SELECT `nombre`,`descripcion`,`precio`,`codigo`,`stock`,`ruta_imagen`FROM productos WHERE `id_producto` = '$producto_id'");
        $result = $query->getResult();

        $data = ["id" => $producto_id, "datos_producto" => $result ];
        return view("detalles_productos", $data);
    }
}
