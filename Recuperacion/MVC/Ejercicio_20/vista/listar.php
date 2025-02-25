<h1>Lista de Tareas</h1>
<?php foreach ($tareas as $tarea): ?>
    <p><?php echo $tarea['descripcion']; ?> 
    <?php if ($tarea['completada']): ?>
        <span>(Completada)</span>
    <?php else: ?>
        <form action="index.php?accion=marcarCompletada" method="post" style="display:inline;">
            <input type="hidden" name="id" value="<?php echo $tarea['id']; ?>">
            <button type="submit">Marcar como completada</button>
        </form>
    <?php endif; ?>
    <form action="index.php?accion=eliminar" method="post" style="display:inline;">
        <input type="hidden" name="id" value="<?php echo $tarea['id']; ?>">
        <button type="submit">Eliminar</button>
    </form>
    </p>
<?php endforeach; ?>
<?php require 'formularios/formularioAgregar.php'; ?>
