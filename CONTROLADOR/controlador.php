<?php
// Incluir la lógica del modelo y vista
include('./MODELO/modelo.php');

$data = array();
$data['title'] = "Productos";
$data['body'] = './VISTA/vistaOpciones.php';

if(isset($_POST['mostrarFamilia'])){
    echo "PUTA";
}

if (isset($_POST['familiaSelec']) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $familia = $_POST['$familia'];
    $resultados = get_productos($familia);
    $data['body'] = "./VISTA/vistaMostrarProductos.php";
}

if (isset($_POST['nombreCorto']) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreCorto = $_POST['$nombreCorto'];
    $resultados = get_producto_selecc($nombreCorto, $familia);
    $data['body'] = './VISTA/vistaEditar.php';
}

require('./VISTA/LAYOUT/layout.php');



