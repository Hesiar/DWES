<?php
    foreach ($tareas as $tarea) {
        if (!$tarea['completada']) {
            echo $tarea['descripcion'];
            require 'formularios/formularioEditar.php';
        }
    }
?>
