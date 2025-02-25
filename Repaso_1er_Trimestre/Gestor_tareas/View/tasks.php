<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Tareas</title>
</head>
<body>
    <h1>Lista de Tareas</h1>
    <ul>
        <?php foreach ($tasks as $task): ?>
        <li>
            <?php echo htmlspecialchars($task['title']); ?>
            <?php if ($task['completed']): ?>
                <strong>(Completada)</strong>
            <?php else: ?>
                <a href="?action=complete&id=<?php echo $task['id']; ?>">Marcar como completada</a>
            <?php endif; ?>
        </li>
        <?php endforeach; ?>
    </ul>

    <h2>Añadir Tarea</h2>
    <form method="post" action="?action=add">
        <input type="text" name="title" placeholder="Nueva tarea" required>
        <button type="submit">Añadir</button>
    </form>
</body>
</html>
