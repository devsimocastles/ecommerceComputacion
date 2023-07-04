<?php
namespace App\Controllers;

class Inicio extends BaseController
{
    public function index(){
        $db = \Config\Database::connect();
        $query= $db->query("SELECT `nombre`,`precio`,`stock`,`ruta_imagen`FROM productos");
        $result = $query->getResult();

        $data = ["productos" => $result];
        return view("index", $data);
    }
}
