<?php
//Devuelve base de datos.
function crear_conexion($servidor, $usuario, $contrasena, $base_datos)
{
    return new mysqli($servidor, $usuario, $contrasena, $base_datos);
}
function cerrar_conexion($conexion)
{
    $conexion->close();
}


function hacer_consulta($consulta, $conexion)
{
    return $conexion->query($consulta);
}

//Devuelve array.
function obtener_resultados($resultado)
{
    return $resultado->fetch_assoc();
}

//Devuelve bool.
function actualizar_producto($consulta,$conexion){
    return $conexion->query($consulta);
}