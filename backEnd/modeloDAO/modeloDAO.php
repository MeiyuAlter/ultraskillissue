<?php
require_once  '../connection/connection.php';

class tarea {

    function obtenerTareaModelo(){
        $connection = connection();
        $sql = "SELECT * FROM tareas";
        $respuesta = $connection->query($sql);
        $tareas = $respuesta->fetch_all(MYSQLI_ASSOC);
        return $tareas;
    }
    function agregarTareaModelo($nombre, $hora, $fecha, $estado){
        $connection = connection();
        $sql = "INSERT INTO tareas VALUES(NULL, '$nombre', '$hora', '$fecha', '$estado')";
        $respuesta = $connection->query($sql);
        if($respuesta == true){
            return "So true sister!";
        }
        else{
            return "Its gojover..";
        }
    }
    function eliminarTareaModelo($id){
        $connection = connection();
        $sql = "DELETE FROM tareas WHERE id='$id'";
        $respuesta = $connection->query($sql);
        return $respuesta;
        }
    function actualizarTareaModelo($id, $nombre, $hora, $fecha, $estado){
        $connection = connection();
        $sql = "UPDATE tareas SET nombre = '$nombre', hora = '$hora', fecha = $fecha, estado = '$estado' WHERE id=$id";
        $actualizar = $connection->query($sql);
        if($actualizar == true){
            return "You've been updated, do not resist.";
        }
        else{
            return "WHY DID YOU RESIST?!!?";
        }
    }
        

    }

?>