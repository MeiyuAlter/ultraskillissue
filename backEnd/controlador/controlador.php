<?php

require_once '../modeloDAO/modeloDAO.php';

$funcion = $_GET['funcion'];

switch ($funcion) {
    case "agregar":
        agregarTarea();
    break;
    case "eliminar":
        eliminarTarea();
    break;
    case "obtener":
        obtenerTarea();
    break;
    case "actualizar":
        actualizarTarea();
    break;
}

function obtenerTarea(){
    $resultado = (new tarea())->obtenerTareaModelo();
    echo json_encode($resultado);
 }
function agregarTarea(){
    $nombre = $_POST['nombre'];
    $hora = $_POST['hora'];
    $fecha = $_POST['fecha'];
    $estado = $_POST['estado'];
    $resultado = (new tarea())->agregarTareaModelo($nombre, $hora, $fecha, $estado);   
    echo json_encode($resultado);
}
function eliminarTarea(){
    $id = $_POST['id'];
    $resultado = (new tarea())->eliminarTareaModelo($id);
    return $resultado;
}
function actualizarTarea(){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $hora = $_POST['hora'];
    $fecha = $_POST['fecha'];
    $estado = $_POST['estado'];
    $resultado = (new tarea())->actualizarTareaModelo($id, $nombre, $hora, $fecha, $estado);   
    echo json_encode($resultado);
    return $resultado;
}