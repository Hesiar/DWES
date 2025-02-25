<form action="index.php?accion=marcarCompletada" method="post">
    <input type="hidden" name="id" value="<?php echo $tarea['id']; ?>">
    <button type="submit">Marcar como completada</button>
</form>
