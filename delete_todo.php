<?php

$id = $_GET['id'];

if($id ?? false){
    $string = file_get_contents('todos');
    $todos = explode("\n", $string);

    if(count($todos) != 1){
        array_pop($todos);
    }

    for($i = 0; $i < count($todos); $i++){
        if($i == $id - 1){
            unset($todos[$i]);
            break;
        }
    }
    $todos = array_values($todos);

    $result = "";
    foreach($todos as $todo){
        $result .= $todo . "\n";
    }

    file_put_contents('todos', $result);

    header('Location: index.php');
}
