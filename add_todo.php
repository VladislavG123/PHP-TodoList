<?php

$todo = $_POST['todo'];

file_put_contents('todos', $todo . "\n", FILE_APPEND);

header('Location: /index.php');

