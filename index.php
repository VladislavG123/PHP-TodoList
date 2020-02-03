<?php
include 'helpers.php';
?>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Todo list</title>
</head>
<body>

<?php render('templates/get_todos.php', ['todos' => include 'get_todos_from_file.php']) ?>

    <form action="/add_todo.php" method="post">
        <input type="text" name="todo" placeholder="Type your plan there...">
        <input type="submit" value="Add">
    </form>
</body>
</html>