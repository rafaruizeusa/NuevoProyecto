<?php
require('config.php');
require('bbdd.php');
function getResultados($query)
{
    try {
        //Crear conexion.
        $conexion = crear_conexion(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        // Ejecutar la consulta SQL.
        $resultado = hacer_consulta($query, $conexion);
        // Crear el array de elementos.
        $resultados = array();
        while ($fila = obtener_resultados($resultado)) {
            $resultados[] = $fila;
        }
        return $resultados;

    } catch (mysqli_sql_exception $e) {
        echo "Erorr: " . $e;
    } finally {
        // Cerrar la conexión.
        cerrar_conexion($conexion);
    }
};

function get_familias(){
return getResultados('SELECT * FROM FAMILIA;');
};

function get_productos($familia){
return getResultados("SELECT NOMBRE_CORTO, PVP, COD FROM PRODUCTO WHERE FAMILIA = '$familia'");
};

function get_producto_selecc($nombreCorto, $codFamilia){
return getResultados("SELECT NOMBRE,DESCRIPCION,PVP FROM PRODUCTO WHERE NOMBRE_CORTO='$nombreCorto' AND FAMILIA='$codFamilia';");
}

function editar_producto($nombreCorto, $nombre, $descripcion, $pvp, $nombreEnDB){
    try {
        //Crear conexion.
        $conexion = crear_conexion(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        // Ejecutar la consulta SQL.
        return actualizar_producto("UPDATE PRODUCTO SET  NOMBRE_CORTO = '$nombreCorto',NOMBRE = '$nombre',DESCRIPCION = '$descripcion', PVP = $pvp WHERE NOMBRE_CORTO = '$nombreEnDB';", $conexion);
    } catch (mysqli_sql_exception $e) {
        echo "Erorr: " . $e;
    } finally {
        // Cerrar la conexión.
        cerrar_conexion($conexion);
    }
}